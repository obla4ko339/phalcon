<?php

/**
 * Created by PhpStorm.
 * User: grabvn
 * Date: 14.03.2017
 * Time: 14:42
 */
class OrganizationController extends BaseController
{

    public function indexAction()
    {
        //вывод названия меню
        $this->view->menusName = Menu::find([
            "menu_name_translit='organization'"
        ]);

        //вывод учреждений
        $this->view->dataContact = Contact::find();
    }


}