<?php
/**
 * Created by PhpStorm.
 * User: tienhv
 * Date: 11/21/15
 * Time: 11:13 AM
 */
App::uses('AppController', 'Controller');
App::uses('ConnectionManager','Model');
/**
 * Class HomeController
 * @property Banner $Banner
 * @property Product $Product
 */
class HomeController extends AppController{
    public function index(){
        $this->loadModel('Banner');
        $this->loadModel('Product');
        $banners = $this->Banner->find('all',array(
            'conditions' => array(
                'Banner.active_flag'    => 1,
                'Banner.type'           => 1
            )
        ));

        $banners2 = $this->Banner->find('all',array(
            'conditions' => array(
                'Banner.active_flag'    => 1,
                'Banner.type'           => 2
            )
        ));

        $hlProduct = $this->Product->find('all',array(
            'conditions'    => array('highlight_flag' => 1),
            'limit'         => 10
        ));

        $htProduct = $this->Product->find('all',array(
            'conditions' => array('highlight_flag' => 1),
            'limit'         => 4
        ));

        $newProduct = $this->Product->find('all',array(
            'conditions' => array('highlight_flag' => 1),
            'limit'         => 10
        ));

        $this->set('hlProduct',$hlProduct);
        $this->set('htProduct',$htProduct);
        $this->set('newProduct',$newProduct);
        $this->set('banners',$banners);
        $this->set('banners2',$banners2);
    }

    public function test(){
        $this->autoRender = false;
        $db = ConnectionManager::getDataSource('default');
        die(var_dump($db->connected));
    }
} 