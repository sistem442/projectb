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
        
        public function index(){
    
                        // we prepare our query, the cakephp way!
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
        
}
