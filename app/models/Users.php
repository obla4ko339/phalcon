<?php

/**
 * Created by PhpStorm.
 * User: grabvn
 * Date: 20.12.2016
 * Time: 16:47
 */

use \Phalcon\Mvc\Model;

class Users extends Model
{
    public $id;
    public $name;
    public $lastname;
    public $birthday;
    public $email;
    public $password;
    public $is_active;


}