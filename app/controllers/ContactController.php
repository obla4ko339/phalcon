<?php
    use Phalcon\Mvc\Url;

class ContactController extends \BaseController
{

    public $dataContact;
    public $getid;
    public $form;


    public function indexAction()
    {
        $this->view->dataContact = Contact::find();
    }

    public function extraAction(){
        $regExp = '/\d{1,}/';
        $arrExp = $this->getUrlId($regExp);
        $this->view->getid = $arrExp[0];
        $this->view->typecontact = Mtypecontact::find(
            [
            "mcontact_id = {$arrExp[0]}",
            ]
        );
    }

    public function editAction(){
        $this->view->dataContact = Contact::find();
    }

    public function getdataAction(){
        $this->view->typecontact = Mtypecontact::find();
    }
    /**
     * @param $regExp
     * @return array
     */
    protected function getUrlId($regExp){
        $urlString = $_GET['_url'];
        if(preg_match($regExp, $urlString, $match)){
            return $match;
        }
    }
}