<?php

/*
 *
 * Encapsulamiento => Permite resguardar los accesos a las variables y metodos, protegiendo de hacer cambios inesperados en el sitema
 * */

class Person
{

    protected $firstName;
    protected $lastName;
    protected $country;
    public $nickName;


    public function __construct($firstName, $lastName, $country = 'Colombia')
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->country = $country;
    }

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getCountry()
    {
        return strtoupper($this->country);
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->firstName = $lastName;
    }

    public function setCountry($country)
    {
        if ($country !== 'Colombia') {
            throw new Exception('Solo es permitido Colombia');
        }
        $this->country = strtolower($country);
    }
}

$person1 = new Person('Gustavo', 'Marquez');
$person1->nickName = 'Gus';
$person1->setCountry('Venezuela');
echo $person1->fullName();