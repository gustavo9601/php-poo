<?php

namespace PruebasUnitarias;

class Str
{
    /*
   *
   * Funcion que reemplaza el string
   *
   * valor_string => valorString
   * */
    public static function studly(string $value): string
    {
        $result = ucwords(str_replace('_', ' ', $value));

        return str_replace(' ', '', $result);
    }
}