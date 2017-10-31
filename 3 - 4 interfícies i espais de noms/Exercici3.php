<?php

/*
* @author sergi.grau@fje.edu
* @version 1.0 8.10.2015
*/
spl_autoload_register(function ($classe) {
    include $classe . '.php';
});

$cotxe1 = new Cotxe('1234 HH');
$cotxe2 = new Cotxe('1234 HH');

if($cotxe1->compareTo($cotxe2))
{
    echo 'son iguals';
}
?>