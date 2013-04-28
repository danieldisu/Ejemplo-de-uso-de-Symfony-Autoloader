<?php
namespace src;

require_once "../../../autoloader.php";

use nombreProyecto\ClasesNegocio\Clase1;
use nombreProyecto\ClasesNegocio\Clase2;

$clase1 = new Clase1();

echo $clase1->metodo();


echo "<br/>";


$clase2 = new Clase2();

echo $clase2->metodo();



?>