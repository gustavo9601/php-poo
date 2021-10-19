<?php

/*
 * Por referencia => las variables son modificadas pasadas por parametro o a otra variable
 * Por Valor => Crea una copia de lo que se este pasando, de esa forma no moficica el valor original
 *
 * */

class Person
{
    protected $name;
    protected $isCloned;

    function __construct($name)
    {
        $this->name = $name;
        $this->isCloned = false;
    }

    /*
     *
     * Se llama cuando se clona el objeto
     * */
    public function __clone()
    {
        // Modifica el atributo en la clonacion
        $this->isCloned = true;
    }
}

// Permite crear un clone, pasado por valor
$person1 = new Person('Gustavo');
$person2 = clone(new Person('Adolfo'));


var_dump($person1);
var_dump($person2);
