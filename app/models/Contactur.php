<?php

use Phalcon\Mvc\Model;

class Contactur extends Model
{
    protected $mcontactur_id;
    protected $mcontact_id;
    protected $mcontactur_name;

    public function initialize(){
        $this->setSource("iac_mcontactur");
    }

    /**
     * @return mixed
     */
    public function getMcontacturId()
    {
        return $this->mcontactur_id;
    }

    /**
     * @param mixed $mcontactur_id
     */
    public function setMcontacturId($mcontactur_id)
    {
        $this->mcontactur_id = $mcontactur_id;
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
    public function getMcontacturName()
    {
        return $this->mcontactur_name;
    }

    /**
     * @param mixed $mcontactur_name
     */
    public function setMcontacturName($mcontactur_name)
    {
        $this->mcontactur_name = $mcontactur_name;
    }


}