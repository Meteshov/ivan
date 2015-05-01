<?php

App::uses('AppModel','Model');

class Book extends AppModel{
    public $name = 'Book';
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty',
            'message'=>'Заполните название книги'
        ),
        'description' => array(
            'rule' => 'notEmpty',
            'message'=>'Заполните название книги'
        )
    );
    public $hasMany = array(
        'Part' => array(
            'className' => 'Part',
            'foreignKey' => 'book_id'
        )
    );
    /*public function afterSave($created,$options=array()){
        var_dump($this->data);die;
    }*/
}