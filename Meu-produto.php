<?php
ob_start();
require('./sheep_core/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDStore</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    
    <!--INÍCIO BANNER MATHEUS DIAS-->
    <div class="novoMenu">

        <!--INÍCIO CONTAINER-->
        <div class="container">

            <!--INÍCIO NAVEGAÇÃO TOPO-->
            <div class="navbar">

                <div class="logo">
                    <a href="index.html"><img src="assets/img/logo.nova-preta.png" alt="MDStore" width="260px"></a>
                </div>

                <!--INÍCIO MENU NAVEGAÇÃO TOPO-->
                <nav>
                    <ul id="MenuItens">
                        <li><a href="index.html" title="">Início</a></li>
                        <li><a href="produtos.html" title="">Produtos</a></li>
                        <li><a href="minha-conta.html" title="">Minha Conta</a></li>
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

    <!--INÍCIO PRODUTOS DETALHES-->
    <form action="filtros/criar.php">
    <div class="corpo-categorias ver-produto">
        <div class="linha">

            <div class="col-2">
                <img src="assets/img/produto-4.jpg" alt="" id="produtoImg">
                <!--INÍCIO LINHA GALERIA-->
                <div class="img-linha">

                    <!--INÍCIO ITEM GALERIA-->
                    <div class="img-col">
                        <img src="assets/img/produto-4.jpg" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!--FIM ITEM GALERIA-->

                    <!--INÍCIO ITEM GALERIA-->
                    <div class="img-col">
                        <img src="assets/img/produto-4.jpg" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!--FIM ITEM GALERIA-->

                    <!--INÍCIO ITEM GALERIA-->
                    <div class="img-col">
                        <img src="assets/img/produto-4.jpg" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!--FIM ITEM GALERIA-->

                    <!--INÍCIO ITEM GALERIA-->
                    <div class="img-col">
                        <img src="assets/img/produto-4.jpg" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!--FIM ITEM GALERIA-->

                </div>
                <!--FIM LINHA GALERIA-->

                

            </div>

            
            
            <div class="col-2">
                <p>Blusa de frio manga longa moletinho</p>
                <h1>Compre com desconto</h1>
                <h4>R$400,00</h4>

                <form action="" method="post">
                    <select name="" id="">
                        <option value="">Selecione o Tamanho</option>
                        <option value="">P</option>
                        <option value="">M</option>
                        <option value="">G</option>
                        <option value="">GG</option>
                        <option value="">XG</option>
                    </select>

                    <input type="number" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">              
                    <button type="submit" class="btn" name="addcarrinho">Adicionar ao Carrinho</button>
                </form>

                <h3>Descrição:</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti totam aperiam, explicabo repellat, voluptates officiis nostrum nemo consequuntur tempore omnis quibusdam dolorum neque, reprehenderit dolores! Culpa omnis expedita eveniet veniam?</p>

            </div>
            </form>

        </div>
    </div>

    <!--FIM PRODUTOS DETALHES-->

    <!--INÍCIO TÍTULO PRODUTOS-->

    <div class="corpo-categorias">
        <div class="linha linha2">
            <h2>Produtos Relacionados</h2>
            <p>Veja Mais</p>

        </div>
    </div>

    <!--FIM TÍTULO PRODUTOS-->



    <!--INÍCIO PRODUTOS EM DESTAQUE-->
    <div class="corpo-categorias">



        <!--INCÍCIO LINHA PRODUTOS EM DESTAQUE-->
        <div class="linha">


            <!--INÍCIO ITEM PRODUTOS EM DESTAQUE-->
            <div class="col-4">
                <a href="ver-produto.html"><img src="assets/img/produto-1.jpg" alt=""></a>
                <h4>Jaqueta Bege
                </h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 997,90</p>
            </div>
            <!--FIM ITEM PRODUTOS EM DESTAQUE-->

            <!--INÍCIO ITEM PRODUTOS EM DESTAQUE-->
            <div class="col-4">
                <a href="ver-produto.html"><img src="assets/img/produto-2.jpg" alt=""></a>
                <h4>Short Bege
                </h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 997,90</p>
            </div>
            <!--FIM ITEM PRODUTOS EM DESTAQUE-->

            <!--INÍCIO ITEM PRODUTOS EM DESTAQUE-->
            <div class="col-4">
                <a href="ver-produto.html"><img src="assets/img/produto-3.jpg" alt=""></a>
                <h4>Gola Polo Azul
                </h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 997,90</p>
            </div>
            <!--FIM ITEM PRODUTOS EM DESTAQUE-->

            <!--INÍCIO ITEM PRODUTOS EM DESTAQUE-->
            <div class="col-4">
                <a href="ver-produto.html"><img src="assets/img/produto-4-.png" alt=""></a>
                <h4>Conjunto Blazer
                </h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 997,90</p>
            </div>
            <!--FIM ITEM PRODUTOS EM DESTAQUE-->


        </div>
        <!--FIM PRODUTOS EM DESTAQUE-->
    </div>


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