<?php

namespace Styde;

abstract class Model
{
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    public function fill(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function getAttribute($name)
    {
        $value = $this->getAttributeValue($name);


        // Verifica si ese atributo tiene una funcion definida en la clase que implementa esta clase
        // Ejemplo
        // first_name a getFirstNameAttribute
        if ($this->hasGetMutator($name)) {
            return $this->mutateAttribute($name, $value);
        }

        return $value;
    }

    protected function hasGetMutator($name)
    {
        // method_exists
        // Verifica si el metodo existe en la instancia actual
        // method_exists(instancia_actual, nombre_del_metodo)
        return method_exists($this, 'get' . Str::studly($name) . 'Attribute');
    }

    protected function mutateAttribute($name, $value)
    {
        // ejecutando una funcion de la instancia actual, sin conocer el nombre de forma dinamica
        // $this->{nombre funcion o atributo a evaluear}(parametro de la funcion)
        return $this->{'get' . Str::studly($name) . 'Attribute'}($value);
    }

    public function getAttributeValue($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
    }

    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __set($name, $value)
    {
        $this->setAttribute($name, $value);
    }

    public function __get($name)
    {
        return $this->getAttribute($name);
    }

    public function __isset($name)
    {
        return isset($this->attributes[$name]);
    }

    public function __unset($name)
    {
        unset ($this->attributes[$name]);
    }
}