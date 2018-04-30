<?php


namespace app\controllers;

//use ishop\App;

class MainController extends AppController {

//    public $layout = 'test';

    public function indexAction() {
//        $this->layout = 'test';
        //echo __METHOD__;
//        $this->setMeta(App::$app->getProperty('shop_name'), 'Описание...', 'Ключевики...');

        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');

        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane', 'Jo'];
        $this->set(compact('name', 'age', 'names'));
    }

}