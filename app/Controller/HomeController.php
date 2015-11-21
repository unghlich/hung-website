<?php
/**
 * Created by PhpStorm.
 * User: tienhv
 * Date: 11/21/15
 * Time: 11:13 AM
 */
App::uses('AppController', 'Controller');
App::uses('ConnectionManager','Model');

class HomeController extends AppController{
    public function index(){

    }

    public function test(){
        $this->autoRender = false;
        $db = ConnectionManager::getDataSource('default');
        die(var_dump($db->connected));
    }
} 