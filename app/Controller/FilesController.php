<?php
App::uses('Controller','AppController');
App::uses('Folder','Utility');
App::uses('File','Utility');
class FilesController extends AppController{
    public $components = array('Auth',"Session");
    public function uploadFile($file,$page){
        $this->loadModel('File');
        $id = AuthComponent::user('id');
        $userDir = new Folder(WWW_ROOT.'files'.DS.'user_'.$id);
        if(empty($userDir->path)){
            $userDir->create(WWW_ROOT.'files'.DS.'user_'.$id);
        }
        if(move_uploaded_file($file['tmp_name'],$userDir->path.DS.$file['name'])){
            //var_dump($page);die();
            $data = array('File'=>array(
                'name'=>$file['name'],
                'path'=>$userDir->path.DS.$file['name'],
                'link'=>Router::fullBaseUrl().'/files/user_'.$id.'/'.$file['name'],
                'type'=>'attach',
                'page_id'=> (int)$page
            ));
            $this->File->save($data);
            $this->File->clear();
            return true;
        }
        else return false;
    }
    public function uploadAvatar(){

    }
    public function uploadFiles($files,$page_id){
            foreach($files as $file){
                $this->uploadFile($file,$page_id);
            }
    }
}