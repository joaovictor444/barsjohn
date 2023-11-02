<?php
session_start();
include 'connectionDataBase.php';
    try{
        $rescueProductes = "SELECT id_prod, nome_prod, descricao_prod, imagem_prod, preco_prod FROM productbars_tbl";
        $rescueResulted = $connection->prepare($rescueProductes);
        $rescueResulted->execute();
    }catch(Exception $errorMessage){
        print("Falha ao Resgatar um ou mais Produto em nossa Tabela de Registros <br>" . "Linha do Erro " . $errorMessage->getLine() . "<br>" . "Mensagem do Erro " . $errorMessage->getMessage()) ."<br>" . "Arquivo do Erro " . $errorMessage->getFile();
    }
?>