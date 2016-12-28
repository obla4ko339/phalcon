<?php
/**
 * Created by PhpStorm.
 * User: grabvn
 * Date: 20.12.2016
 * Time: 11:54
 */

class SignupController extends BaseController
{

    public function indexAction(){

    }

    public function registerAction(){
        $user = new Users();
        $success = $user->save($this->request->getPost(), array('name','email'));

        if($success){
            echo "Thank you on registration.";

            if($this->request->isPost() == true){
                echo $this->request->getPost('name');
                echo $this->request->getPost('email');
            }




        }else{
            echo "Possible worning";
//            print_r($user);
        }
        $this->view->disable();
    }

}