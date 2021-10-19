<?php

namespace Styde;
/*
 * Los metodos magicos, son metodos que sobreescriben el comportamiento
 * al invocar determinados metodos propios de las Clases
 *
 * */


class User
{
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->setAttributes($attributes);
    }

    public function setAttributes(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function getFirstNameAttribute()
    {
        return strtoupper($this->first_name);
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function getAttribute($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }        
    }

    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
    }
    /*
    __set() es el método mágico que PHP llamará automáticamente (si está declarada en la clase) cuando queremos definir
        una propiedad inaccesible o inexistente. Este método recibe dos argumentos:
         el nombre de la propiedad que intentas acceder y el valor que le quieres asignar

          Objeto->atributo = 'valor';
         *
         * */
    public function __set($name, $value)
    {
        $this->setAttribute($name, $value);
    }

    /*
     *
     * es el método mágico con el cual podemos obtener el valor de una propiedad de una clase dinámicamente,
     * cuando ésta es inaccesible (la propiedad está declarada como private o protected) o no existe en la clase.
     *  Objeto->atributo
     *
     * */
    public function __get($name)
    {
        return $this->getAttribute($name);
    }

    /*
     * Cuando se llame isset
     * */
    public function __isset($name)
    {
        return isset($this->attributes[$name]);
    }

    /*
     * Cuando se llame unset
     * */
    public function __unset($name)
    {
        unset ($this->attributes[$name]);
    }
}


$user = new User();

$user->setAttributes([
    'first_name' => 'GUstavo',
    'last_name' => 'Marquez',
]);

$user->nickname = 'Silence';

unset($user->nickname);

echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";

if (isset ($user->nickname)) {
    echo "<p>Nickname: {$user->nickname}</p>";
}



