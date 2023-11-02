<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../config/css/style_general.css">
    <script src="https://kit.fontawesome.com/3486b4745c.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../config/img/ico_web_site.ico" type="image/x-icon">
    <script src="../config/js/validationForm.js"></script>
    <title>John's Bar</title>
</head>
    <body>
        <main id="mainContainer" class="mainContainer">
            <header id="headerContainer" class="headerContainer">
                <a href="#"><i class="fa-solid fa-bars"></i></a>
                <h1>John's Good Bar's</h1>
                <a href="#"><i class="fa-solid fa-user"></i></a>
            </header><!-- end class headerContainer -->

            <nav id="navBarContainer" class="navBarContainer">
                <ul id="messyList" class="messyList">
                    <li><a href="../../index.php">Início</a></li>
                    <li><a href="./registerProduct.php">Cadastrar Produto</a></li>
                    <li><a href="https://www.instagram.com/ujoaozinho9090/">Entrar em Contato</a></li>
                </ul><!-- end class messyList -->
            </nav><!-- end class navBarContainer -->

            <section id="contentForm" class="contentForm">
                <section id="contentHeaderForm" class="contentHeaderForm">
                    <h1>Cadastre um Produto</h1>
                </section><!-- end class contentHeaderForm -->
                <form name="registerProduct" id="processMethodsBars" class="processMethodsBars" action="../logic/processMethodsBars.php" method="post" onsubmit="formSubmit();">
                    <label for="nome_prod">Nome do Produto</label>
                    <input type="text" name="nome_prod" id="nome_prod" placeholder="Digite o Nome do Produto a ser Cadastrado...">

                    <label for="descricao_prod">Descrição do Produto</label>
                    <textarea name="descricao_prod" id="descricao_prod" cols="30" rows="10" placeholder="Digite a Descrição do Produto a ser Cadastrado"></textarea>
                    
                    <label for="imagem_prod">Imagem do Produto</label>
                    <input type="text" name="imagem_prod" id="imagem_prod" placeholder="Cole a URL do Produto a ser Cadastrado...">

                    <label for="preco_prod">Preço do Produto</label>
                    <input type="number" name="preco_prod" id="preco_prod" placeholder="Digite o Preço do produto a ser cadastrado...">

                    <input id="registerProductSubmit" type="submit" name="registerProductSubmit" value="Cadastrar Produto">
                </form><!-- end class processMethodsBars -->
            </section><!-- end class contentForm -->
        </main><!-- end class mainContainer -->
    </body>
</html>