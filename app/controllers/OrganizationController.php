<?php

/**
 * Created by PhpStorm.
 * User: grabvn
 * Date: 14.03.2017
 * Time: 14:42
 */

use Phalcon\Mvc\View;

class OrganizationController extends BaseController
{
    public $dataContact;



    public function indexAction()
    {
        //вывод названия меню
        $this->view->menusName = Menu::find([
            "menu_name_translit='organization'"
        ]);

        //вывод учреждений
        $this->view->dataContact = Contact::find();


        $this->view->dataContact = $this->modelsManager->executeQuery(
            "select * from Contact left join Contactur on Contact.mcontact_id=Contactur.mcontact_id
                                   left join Contactfil on Contactfil.mcontactur_id=Contactur.mcontactur_id"
        );


    }

    public function getDataAction(){
        $this->view->setRenderLevel(
            View::LEVEL_ACTION_VIEW
        );
    }

    public function getContactAction(){
        $this->view->setRenderLevel(
            View::LEVEL_ACTION_VIEW
        );
        $this->assets->addJs("../phalcon/js/organization/organizationGetcontact.js");
        echo $_POST['nameContact'];
    }


}