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
    <title>Ver Produto</title>
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
                        <li><a href="produtos.html" title="">Produtos</a></li>
                        <li><a href="minha-conta.html" title="">Minha Conta</a></li>
                    </ul>
                </nav>
                <!--FIM MENU NAVEGAÇÃO TOPO-->
                <a href="index.php" title="">
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