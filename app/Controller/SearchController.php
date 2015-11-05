<?php
App::uses('AppController', 'Controller');


class SearchController extends AppController {
    
    public function search(){
        
        $this->set('title',__("Search Results"));
        $this->loadModel('Article');
        $this->loadModel('Processor');
        $search_string  = $_POST['search_string'];
        $search_string = $this->mres($search_string);
        $search_string = '"%'.$search_string.'%"';
        
        // search articles
        $conditions = "WHERE body LIKE $search_string OR title LIKE $search_string";
        $query = "SELECT id,title,body,keywords FROM articles ";
//        echo $query.$conditions;
        $articles_results = $this->Article->query($query.$conditions.' ORDER BY id DESC');//LIMIT '.$page*$limit_per_page.', '.$limit_per_page);
        $articles_count_array = $this->Article->query('SELECT COUNT(*) as total_results FROM articles '.$conditions);

        //search processors
        $conditions_2 = "WHERE series LIKE $search_string OR product_name LIKE $search_string OR graphics LIKE $search_string";
        $query_2 = "SELECT id,series,brand,product_name,cache,litography,number_of_cores,socket,launch_year,device_type FROM processors ";
        $processors_results = $this->Processor->query($query_2.$conditions_2.' ORDER BY id DESC');//LIMIT '.$page*$limit_per_page.', '.$limit_per_page);
        $processors_count_array = $this->Processor->query('SELECT COUNT(*) as total_results FROM processors '.$conditions_2);
        
//        echo 'procesor results: '.var_dump($processors_results). ', count: '.$processors_count_array[0][0]['total_results']
//                . '<br>articles results: '.var_dump($articles_results).', count: '.$articles_count_array[0][0]['total_results'];
        
        
        $num_of_processors = $processors_count_array[0][0]['total_results'];
        $num_of_articles = $articles_count_array[0][0]['total_results'];
        $this->set(compact('num_of_processors','num_of_articles','articles_results','processors_results'));
    }
    
    function mres($value)
    {
        $search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
        $replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");

        return str_replace($search, $replace, $value);
    }
}