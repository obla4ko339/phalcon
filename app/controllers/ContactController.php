<?php
    use Phalcon\Mvc\Url;

class ContactController extends \BaseController
{

    public $dataContact;



    public function indexAction()
    {
        $this->view->dataContact = Contact::find();
    }

    public function extraAction(){
        $url = new Url();
        echo $this->getMethod();
    }
}