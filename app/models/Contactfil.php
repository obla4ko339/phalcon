<?php

use Phalcon\Mvc\Model;

class Contactfil extends Model
{

    protected $mcontactfil_id;
    protected $mcontact_id;
    protected $mcontactur_id;
    protected $mcontactfil_name;

    public function initialize(){
        $this->setSource("iac_mcontactfil");
    }

    /**
     * @return mixed
     */
    public function getMcontactfilId()
    {
        return $this->mcontactfil_id;
    }

    /**
     * @param mixed $mcontactfil_id
     */
    public function setMcontactfilId($mcontactfil_id)
    {
        $this->mcontactfil_id = $mcontactfil_id;
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
    public function getMcontactfilName()
    {
        return $this->mcontactfil_name;
    }

    /**
     * @param mixed $mcontactfil_name
     */
    public function setMcontactfilName($mcontactfil_name)
    {
        $this->mcontactfil_name = $mcontactfil_name;
    }



}