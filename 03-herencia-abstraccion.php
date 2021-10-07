<?php

/*
 * Abstracta => concepto abstracto o generico, representa algo general
 * */

abstract class Unit
{
    protected $alive = true;
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function move($direction){
        echo "{$this->name} avanza {$direction}" . PHP_EOL;
    }

    /*
     * al ser abstracto el metodo, obliga a la clase que herede que debe ser implementado en sus hijos
     * */
    abstract public function attack($opponent);
}


class Soldier extends Unit
{
    public function attack($opponent){
        echo "{$this->name} lanza un golpe a {$opponent}" . PHP_EOL;
    }
}

class Archer  extends Unit
{
    public function attack($opponent){
        echo "{$this->name} lanza una flechazo a {$opponent}" . PHP_EOL;
    }
}



$silence = new Soldier('Silence');
$silence->move('el Norte');
$silence->attack('Ramm');

$soldier = new Archer('Soldier');
$soldier->move('El Sur');
$soldier->attack('silence');