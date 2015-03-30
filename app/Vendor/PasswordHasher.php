<?php

class PasswordHasher{

    public function hash($data){
        return sha1($data);
    }
}