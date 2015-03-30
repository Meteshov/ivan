<?php
App::uses('AbstractPasswordHasher', 'Controller/Component/Auth');
class ShaPassPasswordHasher extends AbstractPasswordHasher {
    public function hash($pass){
        return sha1($pass);
    }
    public function check($pass,$confirm){
        return (sha1($pass) == $confirm) ? true : false;
    }
}