<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28.03.15
 * Time: 15:07
 */
App::uses('AppController','Controller');

class UsersController extends AppController{

    public function beforeFilter(){
        $this->Auth->allow('login','register');
    }
    public $components = array('Auth'=>array(
        'loginAction' => array(
            'controller' => 'users',
            'action'=> 'login'
        ),
        'authenticate' => array(
            'Form' => array(
                'fields' => array(
                    'username' => 'email',
                    'password' => 'password'
                ),
                'passwordHasher' => array(
                    'className' => 'ShaPass',
                    'hashType' => 'sha1'
                )
            )
        )
    ));
    public $helpers = array();

    public function register(){
        $this->autoRender = false;
        $this->loadModel('User');
        $this->User->data = $this->request->data;
        if($this->User->save()){
            $this->Session->setFlash('Регистрация прошла успешно');
        }
        else{
            $this->Session->setFlash('Ошибка');
            $this->set('errors',$this->User->validationErrors);
        }
        return $this->redirect('/');
    }
    public function login(){
        $this->autoRender = false;
        if($this->Auth->login()){
            return $this->redirect(array('controller'=>'users','action'=>'dashboard'));
        }
        else{
            var_dump($this->Auth->authError);
        }
    }
    public function logout(){
        $this->Auth->logout();
    }
    public function dashboard(){
        $this->layout = 'home_logged';
    }
}