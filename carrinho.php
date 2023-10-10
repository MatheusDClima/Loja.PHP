<?php
ob_start();
require('./sheep_core/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/carrinho2.png" type="image/x-icon">
    <title>Carrinho</title>
</head>

<body>

    <!--INÍCIO BANNER MATHEUS DIAS-->
    <div class="novoMenu">

        <!--INÍCIO CONTAINER-->
        <div class="container">

            <!--INÍCIO NAVEGAÇÃO TOPO-->
            <div class="navbar">

                <div class="logo">
                    <a href="index.php"><img src="assets/img/logo.nova-preta.png" alt="MDStore" width="260px"></a>
                </div>

                <!--INÍCIO MENU NAVEGAÇÃO TOPO-->
                <nav>
                    <ul id="MenuItens">
                        <li><a href="index.php" title="">Início</a></li>
                        <li><a href="produtos.php" title="">Produtos</a></li>
                        <li><a href="minha-conta.php" title="">Minha Conta</a></li>
                    </ul>
                </nav>
                <!--FIM MENU NAVEGAÇÃO TOPO-->
                <a href="carrinho.php" title="">
                <img src="assets/img/carrinho2.png" alt="" width="30px" height="30px" class="carrinho-img">
                </a>

                <img src="assets/img/menu-preto.png" alt="" class="menu-celular" onclick="menucelular()">

            </div>
            <!--FIM NAVEGAÇÃO TOPO-->

        </div>
        <!--FIM CONTAINER-->

    </div>
    <!--FIM BANNER MATHEUS DIAS-->



     <!--INÍCIO CARRINHO DE COMPRAS-->
        
     <div class="barraLateral">

            <div class="topoCarrinho">
                <p>Meu Carrinho</p>
            </div>        

        <!--INÍCIO PRODUTO CARRINHO DE COMPRAS-->
        <div class="item-carrinho">

            <div class="linha-imagem">
                <img src="assets/img/produto-4.jpg" alt="" class="img-carrinho">
            </div>

                <p>Blusa de Frio</p>
                <h2>R$ 109,90</h2>

            <form action="filtros/excluir.php" method="post">
                <input type="hidden" name="id_produto" value="">
                <button type="submit" style="border:none; background:none;"><i class="fa fa-trash-o"></i></button>
            </form>

        </div>
        <!--FIM PRODUTO CARRINHO DE COMPRAS-->

        <div class="item-carrinho-vazio">Seu carrinho está vazio!</div>

        <div class="rodape-carrinho">
            <h3>Total</h3>
            <h2>R$ 497,00</h2>
        </div>

    </div>
    <!--FIM CARRINHO DE COMPRAS-->




    <!--INÍCIO RODAPÉ-->
    <footer class="rodape">

        <div class="container">
            <div class="linha">

                <div class="rodape-col-1">
                    <h1>Baixe o nosso App</h1>
                    <p>Baixe o nosso aplicativo nas melhores plataformas</p>
                    <div class="app-logo">
                        <img src="assets/img/google.png" alt="">
                        <img src="assets/img/apple.png" alt="">
                    </div>
                </div>

                <div class="rodape-col-2">
                    <img src="assets/img/logo.nova-2.png" alt="">
                    <p>Moda que combina com você.</p>
                </div>

                <div class="rodape-col-3">
                    <h3>Mais Informações</h3>
                    <ul>
                        <li>Cupons</li>
                        <li>Blog</li>
                        <li>Política de Privacidade</li>
                        <li>Contatos</li>
                    </ul>
                </div>

                <div class="rodape-col-4">
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="direitos">
                &#169; Todos os direitos reservados.
            </p>

        </div>
    </footer>


    <!--FIM RODAPÉ-->








    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>