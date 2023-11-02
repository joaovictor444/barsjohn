<?php
session_start();
include('../logic/connectionDataBase.php');
    if(isset($_GET['deleteRegister'])){
        try{
            $id_prod_table = $_GET['deleteRegister'];
            $deleteRegister = "DELETE FROM productbars_tbl WHERE id_prod = :id_prod_table";
            $deleteRegisterResulted = $connection->prepare($deleteRegister);
            $deleteRegisterResulted->bindParam(':id_prod_table', $id_prod_table);
            $deleteRegisterResulted->execute();
            echo("<script>window.alert('O PRODUTO FOI DELETADO DE NOSSA LISTA DE REGISTRO COM SUCESSO'); window.location.href = '../../index.php'</script>");
        }catch(Exception $errorMessage){
            print("Falha ao Deletar um Registro da Nossa Tabela de Dados <br>" . "Linha do Erro " . $errorMessage->getLine() . "<br>" . "Mensagem do Erro " . $errorMessage->getMessage()) . "<br>" . "Arquivo do Erro " . $errorMessage->getFile();
        }
    }

    if(isset($_GET['editRegister'])){
        try{
            $id_prod_table = $_GET['editRegister'];
            $_SESSION['id_prod_session'] = $id_prod_table;
            header('Location: ../pages/updateRegister.php');
        }catch(Exception $errorMessage){
            print("Falha ao Atualizar um Registro da Nossa Tabela de Dados <br>" . "Linha do Erro " . $errorMessage->getLine() . "<br>" . "Mensagem do Erro " . $errorMessage->getMessage()) . "<br>" . "Arquivo do Erro " . $errorMessage->getFile();
        }
    }

    if(isset($_POST['updateProductSubmit'])){
        $nome_prod = $_POST['nome_prod'];
        $descricao_prod = $_POST['descricao_prod'];
        $imagem_prod = $_POST['imagem_prod'];
        $preco_prod = $_POST['preco_prod'];

        $id_user_descript = $_SESSION['id_prod_session'];

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
                $updateProduct = "UPDATE productbars_tbl SET nome_prod = :nome_prod, descricao_prod = :descricao_prod, imagem_prod = :imagem_prod, preco_prod = :preco_prod WHERE id_prod = $id_user_descript";
                $updateProductResulted = $connection->prepare($updateProduct);
                $updateProductResulted->bindParam(':nome_prod', $nome_prod);
                $updateProductResulted->bindParam(':descricao_prod', $descricao_prod);
                $updateProductResulted->bindParam(':imagem_prod', $imagem_prod);
                $updateProductResulted->bindParam(':preco_prod', $preco_prod);
                $updateProductResulted->execute();
                echo("<script>window.alert('O PRODUTO FOI ATUALIZADO DE NOSSA LISTA DE REGISTRO COM SUCESSO'); window.location.href = '../../index.php'</script>");
            }catch(Exception $errorMessage){
                print("Falha ao Atualizar um Produto em nossa Tabela de Registros <br>" . "Linha do Erro " . $errorMessage->getLine() . "<br>" . "Mensagem do Erro " . $errorMessage->getMessage()) . "<br>" . "Arquivo do Erro " . $errorMessage->getFile();
            }
        }
    }else{
        print("Falha ao Cadastrar um Produto. Tente Novamente");
    }
?>