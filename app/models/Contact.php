<?php

use Phalcon\Mvc\Model;

class Contact extends Model
{
    protected $mcontact_id;
    public $mcontact_name;





    public function initialize(){
        $this->setSource("iac_mcontact");
       

    }



    /**
     * @return mixed
     */
    public function getMcontactId()
    {
        return $this->mcontact_id;
    }

    /**
     * @param mixed $mcontact_id
     */
    public function setMcontactId($mcontact_id)
    {
        $this->mcontact_id = $mcontact_id;
    }

    /**
     * @return mixed
     */
    public function getMcontactName()
    {
        return $this->mcontact_name;
    }

    /**
     * @param mixed $mcontact_name
     */
    public function setMcontactName($mcontact_name)
    {
        $this->mcontact_name = $mcontact_name;
    }





}