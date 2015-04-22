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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->layout = false;
            $conditions = $_POST['conditions'];
            $page = $_POST['page'];
             if($conditions != '') $conditions = ' WHERE '.$conditions;
            $search_results = $this->Processor->query($_POST['query'].$conditions.' ORDER BY id DESC LIMIT '.$page*$limit_per_page.', '.$limit_per_page);
            $total_count_array = $this->Processor->query('SELECT COUNT(*) as total_results FROM processors '.$conditions);
            $total_count = $total_count_array[0][0]['total_results'];
            $num_of_pages = $total_count/$limit_per_page;
            $this->set('search_results',$search_results);
            $this->set('num_of_pages',$num_of_pages);
            $this->filter_conditions($conditions);
        }
        else{
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
            $this -> render('/Elements/filter_content');
        }
    }
    
public function test(){}
        
                
}
