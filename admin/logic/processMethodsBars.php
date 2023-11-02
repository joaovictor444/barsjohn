<?php
session_start();
require('connectionDataBase.php');
    if(isset($_POST['registerProductSubmit'])){
        $nome_prod = $_POST['nome_prod'];
        $descricao_prod = $_POST['descricao_prod'];
        $imagem_prod = $_POST['imagem_prod'];
        $preco_prod = $_POST['preco_prod'];

        $_SESSION['nome_prod_session'] = $nome_prod;
        $_SESSION['descricao_prod_session'] = $descricao_prod;
        $_SESSION['imagem_prod_session'] = $imagem_prod;
        $_SESSION['preco_prod_session'] = $preco_prod;

        if($nome_prod == "" && $descricao_prod == "" && $imagem_prod == "" && $preco_prod == ""){
            echo('<script>window.alert("Nenhum dos campos foram preenchidos. Por favor, é necessário preencher todos os campos para realizar uma execução do Produto..."); window.location.href = "../pages/registerProduct.php"</script>');
        }else if($nome_prod == ""){
            echo('<script>window.alert("O campo de Nome do Produto não foi preenchidos. Por favor, é necessário preencher todos os campos para realizar uma execução do Produto..."); window.location.href = "../pages/registerProduct.php"</script>');
        }else if($descricao_prod == ""){
            echo('<script>window.alert("O campo da Descrição do Produto não foi preenchidos. Por favor, é necessário preencher todos os campos para realizar uma execução do Produto..."); window.location.href = "../pages/registerProduct.php"</script>');
        }else if($imagem_prod == ""){
            echo('<script>window.alert("O campo de Imagem do Produto não foi preenchidos. Por favor, é necessário preencher todos os campos para realizar uma execução do Produto..."); window.location.href = "../pages/registerProduct.php"</script>');
        }else if($preco_prod == ""){
            echo('<script>window.alert("O campo de Preço do Produto não foi preenchidos. Por favor, é necessário preencher todos os campos para realizar uma execução do Produto..."); window.location.href = "../pages/registerProduct.php"</script>');
        }else{
            try{
                $insertProduct = "INSERT INTO productbars_tbl (nome_prod, descricao_prod, imagem_prod, preco_prod) VALUES (:nome_prod, :descricao_prod, :imagem_prod, :preco_prod)";
                $resultedInsert = $connection->prepare($insertProduct);
                $resultedInsert->bindParam(':nome_prod', $nome_prod);
                $resultedInsert->bindParam(':descricao_prod', $descricao_prod);
                $resultedInsert->bindParam(':imagem_prod', $imagem_prod);
                $resultedInsert->bindParam(':preco_prod', $preco_prod);
                $resultedInsert->execute();
    
                if(($resultedInsert == true) && ($resultedInsert->rowCount() != 0)){
                    header("Location: ../../index.php");
                }else{
                    echo("<script>echo('O PRODUTO FOI CADASTRADO EM NOSSA LISTA DE REGISTRO COM SUCESSO'); window.location.href = '../../index.php'</script>");
                }
            }catch(Exception $errorMessage){
                print("Falha ao Cadastar um Produto em nossa Tabela de Registros <br>" . "Linha do Erro " . $errorMessage->getLine() . "<br>" . "Mensagem do Erro " . $errorMessage->getMessage()) . "<br>" . "Arquivo do Erro " . $errorMessage->getFile();
            }
        }
    }else{
        print("Falha ao Cadastrar um Produto. Tente Novamente");
    }
?>