<?php

/**
 * Created by PhpStorm.
 * User: grabvn
 * Date: 29.12.2016
 * Time: 10:55
 */
class UsersController extends BaseController
{
    public function indexAction(){
        $this->view->users = Users::find();
    }

    public function newAction(){
        echo "<p>Новый пользователь</p>";

        if($this->request->isPost()){

            $this->view->action = 'new_post';

            $user = new Users();
            $success = $user->save($this->request->getPost(), array('name',
                                                                    'lastname',
                                                                    'birthday',
                                                                    'email',
                                                                    'password',
                                                                    'is_active'));

            if($success){
                $this->view->message = "<br>Пользователь сохранен";
            }else{
                $this->view->errorMsg = "К сажелению возникли следующие проблемы";

                foreach($user->getMessages() as $message){
                    $this->view->errorMsg .= $message->getMessage()."<br>";
                }

                $this->view->message = $this->view->errorMsg;
            }
        }


    }
}