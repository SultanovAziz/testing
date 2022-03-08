<?php


namespace app\controllers;

use app\models\AppModel;

class HomeController extends AppController
{
    public function __construct($route)
    {
        parent::__construct($route);
         
    }

    public function indexAction()
    {
       $this->setMeta("Гланая страница",'Просто','Ключевые слова');
    }
}