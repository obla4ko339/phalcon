<?php


use Phalcon\Mvc\Controller;


class IndexController extends BaseController
{
    public $dir = "../phalcon/";

    public function OnConstruct(){
//        echo "index OnConstruct<br>";

    }

    public function indexAction()
    {
       $this->assets->addCss("".$this->dir."css/style.css");
       $this->assets->addJs("http://angular-doc.herokuapp.com/angular.min.js");
        $this->assets->addJs("../phalcon/js/app.js");

        $this->view->menu = Menu::find();


        $this->view->menus = Menu::find(
            [
                "limit" => "5"
            ]
        );

    }

}