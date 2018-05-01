<?php


namespace app\controllers;

//use ishop\App;

use ishop\Cache;

class MainController extends AppController {

//    public $layout = 'test';

    public function indexAction() {
//        $this->layout = 'test';
        //echo __METHOD__;
//        $this->setMeta(App::$app->getProperty('shop_name'), 'Описание...', 'Ключевики...');

        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);

        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');

        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane', 'Jo', 'Mike'];
        $cache = Cache::instance();
//        $cache->set('test', $names);
//        $cache->delete('test');
        $data = $cache->get('test');
        if (!$data) {
            $cache->set('test', $names);
        }
        debug($data);
        $this->set(compact('name', 'age', 'names', 'posts'));
    }

}