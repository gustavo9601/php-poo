<?php

namespace Styde;

class Str
{
    /*
     *
     * Funcion que reemplaza el string
     *
     * valor_string => valorString
     * */
    public static function studly($value)
    {
        $result = ucwords(str_replace('_', ' ', $value));

        return str_replace(' ', '', $result);
    }
}