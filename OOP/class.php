<?php
class Person
{
    private $name;
    private $age;
    private $height;
    private $phone;
    protected $email;
    function __construct($personsName, $age)
    {
        $this->name = $personsName;
        $this->age = $age;
    }
    function setName($newName)
    {
        $this->name = $newName;
    }
    function setPhone($newPhone)
    {
        $this->phone = $newPhone;
    }
    function setHeight($height)
    {
        $this->height = $height;
    }
    function getName()
    {
        return $this->name;
    }
    function getAge()
    {
        return $this->age;
    }
    function getPhone()
    {
        return $this->phone;
    }
    function getHeight()
    {
        return $this->height;
    }
}
