<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "barsjohn";

    try{
        $connection = new PDO("mysql:host=$host; dbname=$dbname;", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // print("Conexão Efetuada com Sucesso");
    }catch(Exception $errorMessage){
        print("Falha ao Efetuar a Conexão com o Banco de Dados <br>" . "Linha do Erro " . $errorMessage->getLine() . "<br>" . "Mensagem do Erro " . $errorMessage->getMessage()) . "<br>" . "Arquivo do Erro " . $errorMessage->getFile();
    }
?>