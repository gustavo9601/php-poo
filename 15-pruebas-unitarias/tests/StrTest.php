<?php



/*
 * Ejecutar las pruebas con el archivo phpunit.xml definido
 * vendor\bin\phpunit.bat --colors
 * vendor\bin\phpunit.bat
 *
 * */
use PruebasUnitarias\Str;

class StrTest extends \PHPUnit\Framework\TestCase
{
    public function test_studly_method_convert_strings()
    {
        $this->assertSame('FullName', Str::studly('full_name'), 'Prueba full_name a FullName');
        $this->assertSame('Name', Str::studly('name'), 'Prueba name a Name');
    }
}