<?php
    include('./admin/logic/connectionDataBase.php');
    include('./admin/logic/rescueProduct.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin/config/css/style_general.css">
    <script src="https://kit.fontawesome.com/3486b4745c.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./admin/config/img/ico_web_site.ico" type="image/x-icon">
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
                    <li><a href="#">Início</a></li>
                    <li><a href="./admin/pages/registerProduct.php">Cadastrar Produto</a></li>
                    <li><a href="https://www.instagram.com/ujoaozinho9090/">Entrar em Contato</a></li>
                </ul><!-- end class messyList -->
            </nav><!-- end class navBarContainer -->

            <nav id="navBarMobile" class="navBarMobile">
                <ul id="messyList" class="messyList">
                    <li><a href="#">Início</a></li>
                    <li><a href="./admin/pages/registerCategory.php">Cadastrar Categoria</a></li>
                    <li><a href="./admin/pages/registerProduct.php">Cadastrar Produto</a></li>
                    <li><a href="./admin/pages/contactUs.php">Contate-Nos</a></li>
                </ul><!-- end class messyList -->
            </nav><!-- end class navBarMobile -->
            <section id="contentCardDrinks" class="contentCardDrinks">
                <?php 
                    while($rowResulted = $rescueResulted->fetch(PDO::FETCH_ASSOC)){
                        $id_prod_table = $rowResulted['id_prod'];
                        $nome_prod_table = $rowResulted['nome_prod'];
                        $descricao_prod_table = $rowResulted['descricao_prod'];
                        $imagem_prod_table = $rowResulted['imagem_prod'];
                        $preco_prod_table = $rowResulted['preco_prod'];
                ?>
                    <section id="contentCardSingle" class="contentCardSingle">
                        <section id="imageContent" class="imageContent">
                            <img src="<?php echo($imagem_prod_table); ?>" alt="Imagem do Produto">
                        </section><!-- end class imageContent -->

                        <section id="descriptionProduct" class="descriptionProduct">
                            <h1><?php echo($nome_prod_table); ?></h1>
                            <span>R$<?php echo($preco_prod_table); ?></span>
                        </section><!-- end class descriptionProduct -->

                        <section id="contentAuxiliarProduct" class="contentAuxiliarProduct">
                            <p><?php echo($descricao_prod_table); ?></p>

                            <section id="editProduct" class="editProduct">
                                <form name="componentsCrud" id="componentsCrud" class="componentsCrud" action="./admin/logic/componentsCrud.php" method="get">
                                    <?php
                                        echo("<button type='submit' name='deleteRegister' value='$id_prod_table'><i class='fa-solid fa-trash'></i></button>");
                                        echo("<button type='submit' name='editRegister' value='$id_prod_table'><i class='fa-solid fa-pen-to-square'></i></button>");
                                    ?>
                                </form>
                            </section><!-- end class editProduct -->    
                        </section><!-- end class contentAuxiliarProduct -->
                    </section><!-- end class contentCardSingle -->
                    <?php } ?>
            </section><!-- end class contentCardDrinks -->
        </main><!-- end class mainContainer -->
    </body>
</html>