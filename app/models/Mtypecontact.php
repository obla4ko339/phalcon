<?php

/**
 * Created by PhpStorm.
 * User: home
 * Date: 07.03.2017
 * Time: 22:42
 */
class Mtypecontact extends Contact
{
    protected $id_mtypecontact;
    protected $mcontact_id;
    protected $mtypecontact_bible;
    protected $mtypecontact_kdu;
    protected $mtypecontact_museum;
    protected $mtypecontact_dod;
    protected $mtypecontact_tzo;


    public function initialize()
    {
        $this->setSource("iac_mtypecontact");
    }

    /**
     * @return mixed
     */
    public function getIdMtypecontact()
    {
        return $this->id_mtypecontact;
    }

    /**
     * @param mixed $id_mtypecontact
     */
    public function setIdMtypecontact($id_mtypecontact)
    {
        $this->id_mtypecontact = $id_mtypecontact;
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
    public function getMtypecontactBible()
    {
        return $this->mtypecontact_bible;
    }

    /**
     * @param mixed $mtypecontact_bible
     */
    public function setMtypecontactBible($mtypecontact_bible)
    {
        $this->mtypecontact_bible = $mtypecontact_bible;
    }

    /**
     * @return mixed
     */
    public function getMtypecontactKdu()
    {
        return $this->mtypecontact_kdu;
    }

    /**
     * @param mixed $mtypecontact_kdu
     */
    public function setMtypecontactKdu($mtypecontact_kdu)
    {
        $this->mtypecontact_kdu = $mtypecontact_kdu;
    }

    /**
     * @return mixed
     */
    public function getMtypecontactMuseum()
    {
        return $this->mtypecontact_museum;
    }

    /**
     * @param mixed $mtypecontact_museum
     */
    public function setMtypecontactMuseum($mtypecontact_museum)
    {
        $this->mtypecontact_museum = $mtypecontact_museum;
    }

    /**
     * @return mixed
     */
    public function getMtypecontactDod()
    {
        return $this->mtypecontact_dod;
    }

    /**
     * @param mixed $mtypecontact_dod
     */
    public function setMtypecontactDod($mtypecontact_dod)
    {
        $this->mtypecontact_dod = $mtypecontact_dod;
    }

    /**
     * @return mixed
     */
    public function getMtypecontactTzo()
    {
        return $this->mtypecontact_tzo;
    }

    /**
     * @param mixed $mtypecontact_tzo
     */
    public function setMtypecontactTzo($mtypecontact_tzo)
    {
        $this->mtypecontact_tzo = $mtypecontact_tzo;
    }


}