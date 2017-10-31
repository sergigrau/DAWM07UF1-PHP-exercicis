<?php
namespace DAW2;
/**
* Classe que representa un cotxe,
* implementa la interfcie Comparable
* @author sergi.grau@fje.edu
* @version 1.0 12.10.2015
*/


class Cotxe implements Comparable
{
private $matricula;
private $propietats=[];
    
public function __construct($matricula)
    {
        $this->matricula=$matricula;
    }
public function getMatricula()
{
    return $this->matricula;
}
/** dos cotxes són iguals si tenen la mateixa matricula
*/
public function compareTo(Comparable $altre)
{
            return $this->getMatricula() === $altre->getMatricula();

}
public function __toString()
{
    return $this->getMatricula();
}

public function __set($prop, $valor)
{
   $this->propietats[$prop]=$valor; 
}
    public function __get($prop)
{
   if ( array_key_exists ( $prop , $this->propietats )) { 
       return $this->propietats [$prop]; 
   }
}
}