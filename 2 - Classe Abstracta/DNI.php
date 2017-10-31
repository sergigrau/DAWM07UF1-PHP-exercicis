<?php

/**
* Classe que representa un DNI
* @author sergi.grau@fje.edu
* @version 1.0 8.10.2015
*/

class DNI {
    protected $numero;
    public function __construct($n)
    {
        $this->numero=$n;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($n)
    {
        $this->numero=$n;
    }
}
?>

