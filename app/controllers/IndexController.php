<?php
/**
 * Created by PhpStorm.
 * User: grabvn
 * Date: 20.12.2016
 * Time: 11:54
 */

use Phalcon\Mvc\Controller;

class IndexController extends BaseController
{
    public $dir = "../phalcon/";

    public function OnConstruct(){
        echo "index OnConstruct<br>";
    }

    public function indexAction()
    {
       $this->assets->addCss("".$this->dir."css/style.css");
        echo "Hi";
    }

}