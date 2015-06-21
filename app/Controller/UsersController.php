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
            $this->Session->setFlash(
                __('Неправильно введен адрес электронной почты или пароль, пожалуйста, попробуйте еще раз'),
                'default',
                array(),
                'auth'
            );
            $this->redirect('/');
        }
    }
    public function logout(){
        $this->autoRender = false;
        $this->Auth->logout();
        $this->redirect('/');
    }
    public function dashboard(){
        $this->layout = 'home_logged';
        $this->loadModel('User');
        $user = $this->User->find('first',array('conditions'=>array('id'=>$this->Auth->user('id'))));
        $this->set('user',$user['User']);
    }
    public function mentions(){
        $this->layout = 'home_logged';
        $this->loadModel('User');
        $user = $this->User->find('first',array('conditions'=>array('id'=>$this->Auth->user('id'))));
        $this->set('user',$user['User']);
    }
    public function books(){
        $this->layout = 'home_logged';
        $this->loadModel('Book');
        $this->set('books',$this->Book->find('all',array('conditions'=>array('author_id'=>$this->Auth->user('id')))));
        $this->loadModel('User');
        $user = $this->User->find('first',array('conditions'=>array('id'=>$this->Auth->user('id'))));
        $this->set('user',$user['User']);
    }
    public function bookmarks(){
        $this->layout = 'home_logged';
        $this->loadModel('User');
        $user = $this->User->find('first',array('conditions'=>array('id'=>$this->Auth->user('id'))));
        $this->set('user',$user['User']);
    }
    public function edit(){
        $this->layout = 'home_logged';
        $this->loadModel('User');
        $user = $this->User->find('first',array('conditions'=>array('id'=>$this->Auth->user('id'))));
        $this->set('user',$user['User']);
    }
}