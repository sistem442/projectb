<?php
App::uses('AppController', 'Controller');
class ArticlesController extends AppController {

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session','Paginator');
   

    public function index() {
//        $articles = $this->Article->query(''
//                . 'SELECT title,id '
//                . 'FROM articles '
//                . 'WHERE status = "active" '
//                . 'ORDER BY created '
//                . 'LIMIT 0,4');
//        $this->set('articles', $articles);
        $article = $this->Article->query(''
                . 'SELECT title,body '
                . 'FROM articles '
                . 'WHERE id = 1 ');
        $this->set('single_article', $article);
//        $this->loadModel('News');
//        $news = $this->News->query(''
//                . 'SELECT title,id '
//                . 'FROM news '
//                . 'ORDER BY created '
//                . 'LIMIT 0,4');
//        $this->set('news', $news);
        $this->set('title', __('Electronics Tree'));
    }

    public function view($id) {
        $this->set('title', __('Electronics Tree'));
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
        $this->set('title', __('Add Article'));
        if ($this->request->is('post')) {
            $this->Article->create();
            if ($this->Article->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
    }
    
    	public function edit($id = null) {
            $this->set('title', __('Edit article'));
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('The article has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array($this->Article->primaryKey => $id));
			$this->request->data = $this->Article->find('first', $options);
		}
	}

}
