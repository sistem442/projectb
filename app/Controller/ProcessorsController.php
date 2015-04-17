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
    public $components = array('Session','Paginator');
	public $scaffold;
        
        public function table(){
    
            $this->paginate = array(
                'limit' => 10,
                'order' => array('id' => 'desc')
            );

            // we are using the 'User' model
            $processors = $this->paginate('Processor');
            
            // pass the value to our view.ctp
            $this->set('processors', $processors);
            $this->set('title', __('Processors'));    
        }
        
        public function filter(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $this->layout = false;
                $conditions = $_POST['conditions'];
                 if($conditions != '') $conditions = ' WHERE '.$conditions;
                $search_results = $this->Processor->query($_POST['query'].$conditions);
                $this->set('search_results',$search_results);
                $this->filter_conditions($conditions);
            }
            else{
                $this->filter_conditions();
            }
        }
     
        private function filter_conditions($conditions = ''){
            $search = $this->Processor->query('SELECT DISTINCT brand,socket,price,device_type,series,code_name,number_of_cores,frequency,launch_year FROM processors '.$conditions);
            foreach ($search as $product)
            {
                $brands[] = $product['processors']['brand'];
                $socket[] = $product['processors']['socket'];
                $price[] = $product['processors']['price'];
                $device_type[] = $product['processors']['device_type'];
                $series[] = $product['processors']['series'];
                $code_name[] = $product['processors']['code_name'];
                $number_of_cores[] = $product['processors']['number_of_cores'];
                $frequency[] = $product['processors']['frequency'];
                $launch_year[] = $product['processors']['launch_year'];
            }
            
            $brands = array_unique($brands);
            $socket = array_unique($socket);
            $price = array_unique($price);
            $device_type = array_unique($device_type);
            $series = array_unique($series);
            $code_name = array_unique($code_name);
            $number_of_cores = array_unique($number_of_cores);
            $frequency = array_unique($frequency);
            $launch_year = array_unique($launch_year);

            
            $this->set('brands', $brands);
            $this->set('socket', $socket);
            $this->set('price', $price);
            $this->set('device_type', $device_type);
            $this->set('series', $series);
            $this->set('code_name', $code_name);
            $this->set('number_of_cores', $number_of_cores);
            $this->set('frequency', $frequency);
            $this->set('launch_year', $launch_year);
            $this->set('title', __('Processors filter')); 
            
             if($conditions != '') 
            {
                $this->layout = false;
                $conditions = ' WHERE '.$conditions;
                $this -> render('/Elements/filter_content');
            }
        }
        
                
}
