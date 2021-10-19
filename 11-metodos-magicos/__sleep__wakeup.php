<?php

class ClaseTres
{
    private $name;

    function __construct($name)
    {

        $this->name = $name;
    }

    /*
     * Funcion que se llama cuando se serializa el objeto
     * */
    public function __sleep()
    {
        // se especifica en un array las variables o metodos que se quiren serializar
        return ['name'];
    }

    /*
     * Funcion que se llama cuando se deserializa el objeto
     * */
    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

}

// Permite serializar el objeto
echo serialize(new ClaseTres('Gustavo'));

// permite deserializar
// unserialize($variable)