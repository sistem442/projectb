<?php
App::uses('AppController', 'Controller');


class ProcessorsController extends AppController {

    public $paginate = array(
           'limit' => 25,
           'order' => array(
               'Post.title' => 'asc'
           )
       );
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
    public $scaffold;

    public function filter(){

        $this->set('display_no_result_notice_only',false);
        $this->set('title',__("Filter Processors"));
        //$limit_per_page = 8;
        $conditions = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $last_condition_or_keyword_removed  = json_decode($_POST['last_condition_or_keyword_removed'],TRUE);
            $this->set('last_condition_or_keyword_removed',$last_condition_or_keyword_removed);
            $this->layout = false;
            
            if($last_condition_or_keyword_removed){
                $this->set('display_no_result_notice_only',false);
                $this->set('conditions_are_set',false);
                $this->filter_conditions();
                
            }
            else{            
                if(isset($_POST['conditions']))
                    $conditions_array = json_decode($_POST['conditions'],TRUE);
                $keywords_array = json_decode($_POST['keywords_array'],TRUE);
                //$keywords_array = null;
    //            var_dump($keywords_array);
    //            echo '<br/>';
    //            var_dump($conditions_array);

                //prepare conditions from filter
                if(!empty($conditions_array)){
                    foreach ($conditions_array as $key => $value){
                        $conditions = ' '.$conditions.$key.' = '.$value.' AND '; 
                    }
                }
                else {
                    $conditions = '';
                }

                //prepare keywords
                if($keywords_array != null){
                    $keyword_conditions = '';
                    foreach ($keywords_array as $keyword){
                        $keyword_conditions .= " (series LIKE '".$keyword."' "
                                . "OR product_name LIKE '".$keyword."' "
                                . "OR graphics LIKE '".$keyword."' "
                                . "OR socket LIKE '".$keyword."' "
                                . "OR code_name LIKE '".$keyword."' "
                                . "OR brand LIKE '".$keyword."') AND ";
                    }
                    $keyword_conditions = substr($keyword_conditions, 0,-4);
                }
                else {
                    $keyword_conditions ='';
                    $conditions = substr($conditions, 0, -4);
                }


                //build query
                $conditions = ' WHERE '.$conditions.$keyword_conditions. ' AND status = "active"';
                $query = 'SELECT id,brand,socket,price_range,device_type,product_name,number_of_cores,frequency,series,launch_year FROM processors ';
               // var_dump($query.$conditions);
    //                    die;
                $search_results = $this->Processor->query($query.$conditions.' ORDER BY id DESC');//LIMIT '.$page*$limit_per_page.', '.$limit_per_page);
                $total_count_array = $this->Processor->query('SELECT COUNT(*) as total_results FROM processors '.$conditions);

                $num_of_results = $total_count_array[0][0]['total_results'];
                $this->set('number_of_results',$num_of_results );

                if($conditions  && $num_of_results != 0)
                {
                    $this->set('search_results',$search_results);
                    $this->set('conditions_are_set',true);
                    $this->filter_conditions($conditions);
                }
                else
                {
                    //if searched by keyword and no products are found display notice
                    $this->set('display_no_result_notice_only',true);
                    $this->set('conditions_are_set',false);
                    $this->filter_conditions();
                }
            }
        }
        else{
            $this->set('last_condition_or_keyword_removed',false);
            $this->set('conditions_are_set',false);
            $this->filter_conditions();
        }
        
    }

    public function browse(){
        
        $this->set('title','Browse processors');
        //queries for links to all processors
        //
        //first level brand
        $brand_query = 'SELECT DISTINCT brand FROM processors WHERE status = "active" ORDER BY brand ASC';
        $brands2 = $this->Processor->query($brand_query);

        //second level series
        foreach($brands2 as $brand){
            $series_query = 'SELECT DISTINCT series '
                    . 'FROM processors '
                    . 'WHERE brand = "'.$brand['processors']['brand'].'" '. ' AND status = "active"'
                    . ' ORDER BY series ASC';
            $series2 = $this->Processor->query($series_query);

            
            //third level years
            foreach ($series2 as $serie){
                $years_query = 'SELECT DISTINCT launch_year '
                    . 'FROM processors '
                    . 'WHERE brand = "'.$brand['processors']['brand'].'" '. ' AND status = "active"'
                    . 'AND series = "'.$serie['processors']['series'].'" '
                    . ' ORDER BY series ASC';
                $years = $this->Processor->query($years_query);

                foreach ($years as $year){
                    $processors_query = 'SELECT brand,series,product_name,id,cache,frequency,number_of_cores '
                    . 'FROM processors '
                    . 'WHERE brand = "'.$brand['processors']['brand'].'" '. ' AND status = "active"'
                    . 'AND series = "'.$serie['processors']['series'].'" '
                    . 'AND launch_year = "'.$year['processors']['launch_year'].'" '
                    . ' ORDER BY product_name ASC';
                    $processors2 = $this->Processor->query($processors_query);
                    $year_result_array[$year['processors']['launch_year']] = $processors2;
                }
                $series_result_array[$serie['processors']['series']] = $year_result_array;
                $year_result_array = [];
            }
            $processors[$brand['processors']['brand']] = $series_result_array;
            $series_result_array = [];
        }
        
        $this->set(compact('processors'));
    }


    private function filter_conditions($conditions = ''){
       //var_dump($conditions);
        if($conditions == ''){
            $conditions = ' WHERE status = "active"';
            $conditions_are_set = false;
        }
        else {
            $conditions = $conditions. ' AND status = "active"';
            $conditions_are_set = true;
        }
        //query for forming filter radio butons
        $query = 'SELECT DISTINCT brand,socket,'
                . 'price_range,device_type,series,code_name,'
                . 'number_of_cores,frequency_range,launch_year '
                . 'FROM processors '.$conditions;
        //var_dump($query);
        $search = $this->Processor->query($query);
 
        foreach ($search as $product)
        {
            $brands[] = $product['processors']['brand'];
            $socket[] = $product['processors']['socket'];
            $price[] = $product['processors']['price_range'];
            $device_type[] = $product['processors']['device_type'];
            $series[] = $product['processors']['series'];
            $code_name[] = $product['processors']['code_name'];
            $number_of_cores[] = $product['processors']['number_of_cores'];
            $frequency_range[] = $product['processors']['frequency_range'];
            $launch_year[] = $product['processors']['launch_year'];
        }

        $brands = array_unique($brands);
        $socket = array_unique($socket);
        $price = array_unique($price);
        $device_type = array_unique($device_type);
        $series = array_unique($series);
        $code_name = array_unique($code_name);
        $number_of_cores = array_unique($number_of_cores);
        $frequency_range = array_unique($frequency_range);
        $launch_year = array_unique($launch_year);


        $this->set('brands', $brands);
        $this->set('socket', $socket);
        $this->set('price', $price);
        $this->set('device_type', $device_type);
        $this->set('series', $series);
        $this->set('code_name', $code_name);
        $this->set('number_of_cores', $number_of_cores);
        $this->set('frequency_range', $frequency_range);
        $this->set('launch_year', $launch_year);
        $this->set('title', __('Processors filter')); 

         if($conditions_are_set) 
        {
            $this->layout = false;
            $conditions = ' WHERE '.$conditions. ' AND status = "active"';
            
        }
    }

public function comparison($ids){
    
    $this->set('title','Compare processors');
    $query = 'SELECT '
            . 'id,'
            . 'product_name,'
            . 'cache,'
            . 'frequency,'
            . 'turbo_frequency,'
            . 'tdp,'
            . 'max_ram_memory,'
            . 'graphics,'
            . 'device_type,'
            . 'number_of_threads,'
            . 'litography,'
            . 'max_memory_channels,'
            . 'max_memory_bandwidth,'            
            . 'brand,'
            . 'socket,'
            . 'price_range,'
            . 'device_type,'
            . 'series,'
            . 'code_name,'
            . 'number_of_cores,'
            . 'frequency_range,'
            . 'launch_year '
            . 'FROM processors WHERE id in ('.$ids.');'. ' AND status = "active"';
      
          $comparison_items = $this->Processor->query($query);
          $this->set('comparison_items',$comparison_items);
}
public function view($brand,$series,$product_name){
//    var_dump($brand);
//    var_dump($series);
//    var_dump($product_name);
//    die;
    $series = str_replace('_', ' ', $series);
    $product_name = str_replace('_', '-', $product_name);
    $query = 'SELECT '
            . 'product_name,'
            . 'cache,'
            . 'frequency,'
            . 'turbo_frequency,'
            . 'tdp,'
            . 'max_ram_memory,'
            . 'graphics,'
            . 'device_type,'
            . 'number_of_threads,'
            . 'litography,'
            . 'max_memory_channels,'
            . 'max_memory_bandwidth,'            
            . 'brand,'
            . 'socket,'
            . 'price_range,'
            . 'device_type,'
            . 'series,'
            . 'code_name,'
            . 'number_of_cores,'
            . 'frequency_range,'
            . 'launch_year '
            . 'FROM processors '
            . 'WHERE product_name = "'.$product_name.'" '
            . 'AND brand = "'.$brand.'" '
            . 'AND series = "'.$series.'" '
            . 'AND status = "active"';
      
    $item = $this->Processor->query($query);
    $this->set('item',$item);
    $this->set('title',$item[0]['processors']['brand'].' '.$item[0]['processors']['series'].' '.$item[0]['processors']['product_name']);
}

public function test(){
     $this->layout = false;
     $array =  array('61'=>  "$0 - $50", '4'=>  "$100 - $150", '2'=>  "$150 - $200", '36'=>  "$200- $250", '6'=>  "$250 - $300", '63'=>  "$50 - $100", '0'=>  ">$300" );
     var_dump('sorted array <br/>');
     natsort($array);
     var_dump($array);
     die;
}
           
           
}
