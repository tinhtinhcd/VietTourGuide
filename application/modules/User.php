<?php
class Model_User{
    protected $db;
    public function __construct(){
        $this->db=Zend_Registry::get('db');
    }
    public function listUser(){ 
    }
    public function login(){
    }
    public function addUser(){
    }
    public function searchUser(){
    }
    public function updateUser(){
	}
}