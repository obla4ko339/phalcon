<?php

/**
 * Created by PhpStorm.
 * User: grabvn
 * Date: 28.12.2016
 * Time: 17:06
 */
abstract class BaseController extends \Phalcon\Mvc\Controller
{

    public function initialize(){
        //$this->view->setTemplateAfter("common");
    }

   abstract public function indexAction();

    public function menuAction(){
       
    }

}