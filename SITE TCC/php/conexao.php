<?php

$host = "anluiusinagem.mysql.dbaas.com.br";
$user = "anluiusinagem";
$pass = "Alsc@@1967";
$banc = "anluiusinagem";

    $conexao = mysqli_connect($host, $user, $pass, $banc) OR die ("Erro ao conectar");

    if ($conexao->connect_errno){
    echo "falha ao conectar (" . $conexao->connect_errno . ")" . $conexao->connect_errno;
    }

?>