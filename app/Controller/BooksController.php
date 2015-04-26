<?php
App::uses('AppController','Controller');

class BooksController extends AppController{

    public $components = array('Session','Auth');
    public $helpers = array('Html','Form','Session');

    public function beforeFilter(){
        $this->layout = 'book';
        $this->Auth->deny('*');
    }

    public function add(){
        if(!empty($this->request->data)){
            $this->loadModel('Book');
            $this->Book->data = $this->request->data;
            $this->Book->data['Book']['author_id'] = $this->Auth->user('id');
            if($this->Book->save()){
                return $this->redirect('/dashboard/book/edit/'.$this->Book->id);
            }
        }
    }
    public function edit($id,$page){

    }
}