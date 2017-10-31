<?php

/**
* Classe que representa un Professor
* @author sergi.grau@fje.edu
* @version 1.0 8.10.2015
*/

class Professor extends Persona{

    public static $escola='Escola del Clot';
    protected $sou;
    public function __construct()
    {
        parent::__construct();
        $this->sou=0;
    }
    public static function crearProfessorNombreNIF($n, $nif ) 
    {
    	$instancia = new self();
    	$instancia->setNom($n);
        $instancia->nif=new NIF($nif);
    	return $instancia;
    }

    public function getSou()
    {
        return $this->sou;
    }
    public function setSou($s)
    {
        $this->sou=$s;
    }
    public function __toString()
    {
        return 'Professor '.$this->getNom().' amb '.$this->getNIF();
    }
}

?>

