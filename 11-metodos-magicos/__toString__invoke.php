<?php

class SegundaClase
{

    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /*
     * Permite añadir comportamiento de string cuando se requiera imprimir el objeto
     * */
    public function __toString()
    {
        return "Name $this->name" . PHP_EOL;
    }

    /*
     * Permite añadir comportamiento como una funcion a la instancia del objeto
     *
     * */
    public function __invoke($value)
    {
        return "Valor como funcion {$value}";
    }

}


echo new SegundaClase('Gustavo');
// Mismo resultado para llamando implizitamente el metodo
echo (new SegundaClase('Laura'))->__toString();

$objeto = new SegundaClase('s');
echo $objeto('AAAAAAAA');