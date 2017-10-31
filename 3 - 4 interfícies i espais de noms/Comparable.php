<?php
namespace DAW2;

/**
* Interfície que garanteix que les classes tenen l'operació Comparable
* @author sergi.grau@fje.edu
* @version 1.0 12.10.2015
*/
interface Comparable
{
    /**
     * @param Comparable $altre
     * @return Bool true | false 
     */
    public function compareTo(Comparable $altre);
}
?>