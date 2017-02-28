<?php


use Phalcon\Mvc\Model;

class Menu extends Model
{

    protected $menu_id;
    protected $menu_name;
    protected $menu_name_translit;


    public function initialize(){
        $this->setSource("iac_menu");
    }

    /**
     * @return mixed
     */
    public function getMenuId()
    {
        return $this->menu_id;
    }

    /**
     * @param mixed $menu_id
     */
    public function setMenuId($menu_id)
    {
        $this->menu_id = $menu_id;
    }

    /**
     * @return mixed
     */
    public function getMenuName()
    {
        return $this->menu_name;
    }

    /**
     * @param mixed $menu_name
     */
    public function setMenuName($menu_name)
    {
        $this->menu_name = $menu_name;
    }

    /**
     * @return mixed
     */
    public function getMenuNameTranslit()
    {
        return $this->menu_name_translit;
    }

    /**
     * @param mixed $menu_name_translit
     */
    public function setMenuNameTranslit($menu_name_translit)
    {
        $this->menu_name_translit = $menu_name_translit;
    }





}