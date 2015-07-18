<?php

class Picture
{
    private $id;
    private $address;
    public function __construct($id="",$address="")
    {
        $this->id = $id;
        $this->address = $address;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setaddress($address)
    {
        $this->address = $address;
    }
}

?>