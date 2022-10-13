<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassowrd = '';
    $dbName = 'formulario-tonto';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassowrd, $dbName);

    if($conexao->connect_errno){
        echo "Erro";
    } 
    else{
        echo "Conexão efetuada com sucesso";
    }
    
?>