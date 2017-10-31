<?php
use DAW2\Cotxe;
/*
* @author sergi.grau@fje.edu
* @version 1.0 8.10.2015
*/
include "Comparable.php";
include "Cotxe.php";


//$cotxe1 = new DAW2\Cotxe('1234 HH');
$cotxe1 = new Cotxe('1234 HH');
var_dump($cotxe1);

$cotxe1->__set('color','vermell');
var_dump($cotxe1);
?>