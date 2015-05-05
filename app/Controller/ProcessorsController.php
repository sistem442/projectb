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

        $limit_per_page = 8;
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

            $query = 'SELECT id,brand,socket,price_range,device_type,product_name,number_of_cores,frequency_range,launch_year FROM processors ';
            $search_results = $this->Processor->query($query.$conditions.' ORDER BY id DESC LIMIT '.$page*$limit_per_page.', '.$limit_per_page);
            $total_count_array = $this->Processor->query('SELECT COUNT(*) as total_results FROM processors '.$conditions);
            $total_count = $total_count_array[0][0]['total_results'];
            $num_of_pages = $total_count/$limit_per_page;
            $this->set('search_results',$search_results);
            $this->set('num_of_pages',$num_of_pages);
            $this->set('conditions_are_set',true);
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

    private function filter_conditions($conditions = ''){
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
public function test(){}
            
           
}
