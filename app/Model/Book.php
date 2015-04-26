<?php

App::uses('AppModel','Model');

class Book extends AppModel{

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
}