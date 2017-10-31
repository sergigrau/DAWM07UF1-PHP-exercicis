<?php

/**
* Classe que representa un Alumne
* @author sergi.grau@fje.edu
* @version 1.0 8.10.2015
*/

class Alumne extends Persona{

    public static $escola='Escola del Clot';
    protected $numAlumne;
    public function __construct()
    {
        parent::__construct();
        $this->numAlumne=0;
    }
    public static function crearAlumneNombreNIF($n, $nif ) 
    {
    	$instancia = new self();
    	$instancia->setNom($n);
        $instancia->nif=new NIF($nif);
    	return $instancia;
    }

    public function getNumAlumne()
    {
        return $this->numAlumne;
    }
    public function setNumAlumne($n)
    {
        $this->numAlumne=$n;
    }
}

?>

