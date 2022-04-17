<?php

$localhost = "localhost";

$user = "root";

$passw = "";

$banco = "loja";

// ESTRUTURAL
$conecta = mysqli_connect($localhost, $user, $passw, $banco);        // fazendo a conexao com o banco de dados

$sql = mysqli_query($conecta, "SELECT * FROM usuarios");        // fazendo uma consulta 

echo "Exitem " .mysqli_num_rows($sql). " regitros";        // vai imprimir quantas linhas existem no resultado pesquisado 


?>