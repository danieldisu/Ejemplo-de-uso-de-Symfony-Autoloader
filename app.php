<?php
require_once('vendor/Symfony/Component/ClassLoader/UniversalClassLoader.php');

use Symfony\Component\ClassLoader\UniversalClassLoader;


$loader = new UniversalClassLoader();

$loader->registerNamespace("nombreProyecto", __DIR__.'/src');

$loader->register();



use nombreProyecto\ClasesNegocio\Clase1;
use nombreProyecto\ClasesNegocio\Clase2;

$clase1 = new Clase1();

echo $clase1->metodo();


echo "<br/>";


$clase2 = new Clase2();

echo $clase2->metodo();



?>