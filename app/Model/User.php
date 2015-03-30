<?php

App::uses('AppModel','Model');
App::import();
class User extends AppModel{

    public $validate = array(
        'email' => array(
            'rule-1'=>array(
                'rule' => 'email',
                'message' => 'Недопустимый адрес',
                'required'=>true
            ),
            'rule-2'=>array(
                'rule' => 'isUnique',
                'message'=>'Данный e-mail уже используется'
            )
        ),
        'password' => array(
            'rule-1' => array(
                'rule' => array('minLength',6),
                'message' => 'Минимальная длина паролей - 8 символов'
            ),
            'rule-2' => array(
                'rule'=>array('confirmPass'),
                'message'=>'Введенные пароли не совпадают'
            )
        )
    );
    public $hasMany = array();

    public function beforeSave($options = array()) {
        if (!empty($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = sha1(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }

    public function confirmPass(){
        return ($this->data[$this->alias]['password'] == $this->data[$this->alias]['confirm']) ? true : false;
    }
}