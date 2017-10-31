<?php

/**
* Classe que representa una Persona
* @author sergi.grau@fje.edu
* @version 1.0 8.10.2015
*/

abstract class Persona {

    protected $nom;
    private $nif ;
    
    public function __construct()
    {
        $this->nif=new NIF(0);
    }
    /**Mètode factoria per evitar el problema que no
    * existeix la sobrecàrrega en PHP
    */
    public static function crearPersonaNombreNIF($n, $nif ) 
    {
    	$instancia = new self();
    	$instancia->setNom($n);
        $instancia->nif=new NIF($nif);
    	return $instancia;
    }

    
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($n)
    {
        $this->nom=$n;
    }
     public function getNIF()
    {
        return $this->nif;
    }
    public function setNIF($n)
    {
        $this->nif=$n;
    }
    public function __toString()
    {
        return $this->getNom().' amb '.$this->getNIF();
    }
}

?>

