<?php


require_once(dirname(__FILE__, 2) . '\src\config\database.php');

//chamando um metodo estatico de uma classe  ::
Database::getConnection();

$variavel="teste";
print($variavel);
