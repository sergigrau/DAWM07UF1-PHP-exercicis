<?php

/**
* Classe que representa un NIF
hererta de la classe DNI
* @author sergi.grau@fje.edu
* @version 1.0 8.10.2015
*/

class NIF extends DNI{
    private $lletra;
    
    public function __construct($xifres)
    {
        parent::__construct($xifres);
        $this->calcularLletra();
    }
    public function getLletra()
    {
        return $this->lletra;
    }
    public function calcularLletra()
    {
        $taula='TRWAGMYFPDXBNJZSQVHLCKE';
        $this->lletra=substr($taula, $this->numero%23,1);
    }
    public function __toString()
    {
        return $this->numero.'-'.$this->lletra;
    }
}
?>

