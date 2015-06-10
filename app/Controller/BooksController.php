<?php
App::uses('AppController','Controller');

class BooksController extends AppController{

    public $components = array('Session','Auth');
    public $helpers = array('Html','Form','Session');

    public function beforeFilter(){
        $this->layout = 'book';
        $this->Auth->deny('*');
        $this->Auth->allow(array('savePage','attachFile'));
    }

    public function add(){
        if(!empty($this->request->data)){
            $this->loadModel('Book');
            $this->loadModel('Part');
            $this->Book->data = $this->request->data;
            $this->Book->data['Book']['author_id'] = $this->Auth->user('id');
            if($this->Book->save($this->request->data)){
                $this->Part->data['Part']['number'] = 1;
                $this->Part->data['Part']['book_id'] = $this->Book->id;
                $this->Part->save();
                return $this->redirect('/dashboard/books/edit/'.$this->Book->id.'/1');
            }
            else{
                die('123');
            }
        }
        $this->set('show_pages',false);
    }
    public function edit($id,$page_num){
        $this->loadModel('Book');
        $book = $this->Book->findById($id);
        if(!empty($book)){
            $pages = $this->sortByPageNum($book['Part']);
            $this->set('book',$book);
            $this->set('page',$pages[$page_num]);
            $this->set('pages',$book['Part']);
            $this->set('show_pages',true);
        }
    }
    public function view($id,$page_num){
        $this->loadModel('Book');
        $book = $this->Book->findById($id);
        if(!empty($book)){
            $pages = $this->sortByPageNum($book['Part']);
            $this->set('book',$book);
            $this->set('page',$pages[$page_num]);
            $this->set('pages',$book['Part']);
            $this->set('show_pages',true);
        }
    }
    public function savePage(){
        $this->autoRender = false;
        $book = $this->request->data['b_id'];
        $page = $this->request->data['num'];
        $content = $this->request->data['content'];
        $this->loadModel('Part');
        $page = $this->Part->find('first',array(
                'conditions'=>array(
                    'book_id' => $book,
                    'number' => $page
                ),
                'fields'=>'id'
            )
        );
        $this->Part->clear();
        $this->Part->id = $page['Part']['id'];
        $data = array('content'=>$content);
        if($this->Part->save($data)){
            $re = 'done';
        }
        else{
            $re = $this->Part->validationErrors;
        }
        var_dump($re);
        //$this->response->body($re);
    }
    public function attachFile(){
        $this->autoRender = false;
        echo "123";
    }
}