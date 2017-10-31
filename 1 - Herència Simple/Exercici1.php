
<?php
/*
* @author sergi.grau@fje.edu
* @version 1.0 8.10.2015
*/
spl_autoload_register(function ($classe) {
    include $classe . '.php';
});

$dni = new DNI(12345678);
echo 'el nombre es '.$dni->getNumero();
$nif = new NIF(12345678);
var_dump($nif, (string) $nif);
$persona = new Persona();
$persona->setNom('SERGI');
$persona->setNIF($nif);
var_dump($persona, (string) $persona);
$persona2= Persona::crearPersonaNombreNIF('JOAN',87654321); //mètode factoria
var_dump($persona2, (string) $persona2);
$alumne = new Alumne();
$alumne->setNom('ANNA');
$alumne->setNIF($nif);
var_dump($alumne, (string) $alumne);
$professor= new Professor();
$professor->setNom('SERGI');
$professor->setNIF($nif);
$professor->setSou(1000);
var_dump($professor, (string) $professor);
$nif2= new NIF(12345678);
if($nif==$nif2) echo 'son iguals<br/>'; // compara els atributs de les classes, si volen comparar el tipus cal utilitzar ===

//us del polimorfime
$matriu_persones = [];
$matriu_persones[]= $persona;
$matriu_persones[]= $alumne;
$matriu_persones[]= $professor;

foreach($matriu_persones as $item){
    echo $item.'<br/>';
}

?>