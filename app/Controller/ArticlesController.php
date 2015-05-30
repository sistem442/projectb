<?php
App::uses('AppController', 'Controller');
class ArticlesController extends AppController {

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session','Paginator');
   

    public function index() {
        $articles = $this->Article->query(''
                . 'SELECT title,id '
                . 'FROM articles '
                . 'ORDER BY created '
                . 'LIMIT 0,4');
        $this->set('articles', $articles);
        $this->loadModel('News');
        $news = $this->News->query(''
                . 'SELECT title,id '
                . 'FROM news '
                . 'ORDER BY created '
                . 'LIMIT 0,4');
        $this->set('news', $news);
        $this->set('title', __('Beta Electronics'));
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Article->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
        
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Article->create();
            if ($this->Article->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
    }

}
