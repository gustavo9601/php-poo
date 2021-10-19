<?php

class UnaClase
{

    /*
     *  es el método mágico de PHP que se invocará cuando se intenta llamar a un
     * método que no está definido en el objeto.
     * */
    public function __call($metodo, array $args)
    {
        var_dump($metodo, $args);
    }

    /*
     *
     * Es el método mágico que se invocará cuando se intenta llamar a un inaccesible o no
     * disponible método en el contexto de una clase, es decir,
     * estamos llamando un método estático que no existe en la clase.
     * */

    public static function __callStatic($metodo, array $args)
    {
        var_dump($metodo, $args);
    }
}

$unObjeto = new UnaClase;
//Llama al método mágico __call
$unObjeto->unMetodo('Un argumento', 'otro argumento');
//Llama al método mágico __callStatic
UnaClase::unMetodo('todos', 'los', 'argumentos');