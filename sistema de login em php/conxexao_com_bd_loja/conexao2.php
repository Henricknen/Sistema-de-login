<?php

$localhost = "localhost";

$user = "root";

$passw = "";

$banco = "loja";

// ORIENTADA A OBJETOS COM PDO
$pdo = new PDO("mysql:dbname=".$banco.";host=".$localhost, $user, $passw);
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo -> query("SELECT * FROM usuarios");

$sql -> execute();      // acesando a variavel sql (orientacao a objeto)

echo $sql -> rowCount();

?>