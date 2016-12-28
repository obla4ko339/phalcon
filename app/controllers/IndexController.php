<?php
/**
 * Created by PhpStorm.
 * User: grabvn
 * Date: 20.12.2016
 * Time: 11:54
 */



class IndexController extends BaseController
{
    public $dir = "../phalcon/";


    public function indexAction()
    {
       $this->assets->addCss("".$this->dir."css/style.css");
    }

}