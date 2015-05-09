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

        //$limit_per_page = 8;
        $conditions = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->layout = false;
            $conditions_array = json_decode($_POST['conditions'],TRUE);
            foreach ($conditions_array as $key => $value){
                $conditions = ' '.$conditions.$key.' = '.$value.' AND '; 
            }
            $conditions = substr($conditions, 0, -4);
            $page = $_POST['page'];
            if($conditions != '') $conditions = ' WHERE '.$conditions;

            $query = 'SELECT id,brand,socket,price_range,device_type,product_name,number_of_cores,frequency,series,launch_year FROM processors ';
            $search_results = $this->Processor->query($query.$conditions.' ORDER BY id DESC');//LIMIT '.$page*$limit_per_page.', '.$limit_per_page);
            $total_count_array = $this->Processor->query('SELECT COUNT(*) as total_results FROM processors '.$conditions);
            
            $this->set('search_results',$search_results);
            $this->set('conditions_are_set',true);
            $this->set('number_of_results',$total_count_array[0][0]['total_results']);
            if($conditions != '')
            {
                $this->filter_conditions($conditions);
            }
            else
            {
                $this->set('conditions_are_set',false);
                $this->filter_conditions();
            }
        }
        else{
            $this->set('conditions_are_set',false);
            $this->filter_conditions();
        }
    }

    public function browse(){
         //queries for links to all processors
        //
        //first level brand
        $brand_query = 'SELECT DISTINCT brand FROM processors ORDER BY brand ASC';
        $brands2 = $this->Processor->query($brand_query);

        //second level series
        foreach($brands2 as $brand){
            $series_query = 'SELECT DISTINCT series '
                    . 'FROM processors '
                    . 'WHERE brand = "'.$brand['processors']['brand'].'" '
                    . ' ORDER BY series ASC';
            $series2 = $this->Processor->query($series_query);

            
            //third level years
            foreach ($series2 as $serie){
                $years_query = 'SELECT DISTINCT launch_year '
                    . 'FROM processors '
                    . 'WHERE brand = "'.$brand['processors']['brand'].'" '
                    . 'AND series = "'.$serie['processors']['series'].'" '
                    . ' ORDER BY series ASC';
                $years = $this->Processor->query($years_query);

                foreach ($years as $year){
                    $processors_query = 'SELECT product_name '
                    . 'FROM processors '
                    . 'WHERE brand = "'.$brand['processors']['brand'].'" '
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
       
            
        //query for forming filter radio butons
        $search = $this->Processor->query('SELECT DISTINCT brand,socket,price_range,device_type,series,code_name,number_of_cores,frequency_range,launch_year FROM processors '.$conditions);
 
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

         if($conditions != '') 
        {
            $this->layout = false;
            $conditions = ' WHERE '.$conditions;
            
        }
    }

public function comparison($ids){
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
            . 'FROM processors WHERE id in ('.$ids.');';
      
          $comparison_items = $this->Processor->query($query);
          $this->set('comparison_items',$comparison_items);
}

public function item($id){
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
            . 'FROM processors WHERE id = '.$id.';';
      
          $item = $this->Processor->query($query);
          $this->set('item',$item);
}

public function test(){}
            
           
}
