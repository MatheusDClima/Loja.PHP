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
    <title>MDStore</title>
</head>
<body>

    <!--INÍCIO BANNER  MATHEUS DIAS-->
     <div class="banner">
       
       <!--INÍCIO CONTAINER--> 
         <div class="container">
            
            <!--INÍCIO NAVEGAÇÃO TOPO-->
                <div class="navbar">

                    <div class="logo">
                        <a href="index.php"><img src="assets/img/logo.nova.png" alt="MDStore" width="150px"></a>
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
                    <img src="assets/img/carrinho.png" alt="" width="30px" height="30px" class="carrinho-img">
                    </a>

                    <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">

                 </div>
               <!--FIM NAVEGAÇÃO TOPO-->
        </div>
       <!--FIM CONTAINER-->
    </div>
  <!--FIM BANNER-->  


    <!--INÍCIO PRODUTOS EM DESTAQUE-->
     <div class="corpo-categorias">

        <h2 class="titulo">Produtos em Destaque</h2>


       <!--INCÍCIO LINHA PRODUTOS EM DESTAQUE--> 
        <div class="linha">
            <!--INÍCIO ITEM PRODUTOS EM DESTAQUE-->
                <div class="col-4">
                    <a href="ver-produto.php" title="">
                    <img src="assets/img/produto-1.jpg" alt=""></a>
                    <h4>Blazer Branco</h4>
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
                <a href="ver-produto.php" title="">
                <img src="assets/img/produto-2.jpg" alt=""></a>
                <h4>Camisa Social</h4>
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
                <a href="ver-produto.php" title="">
                <img src="assets/img/produto-3.jpg" alt=""></a>
                <h4>Jaqueta Jeans</h4>
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
                <a href="ver-produto.php" title="">
                <img src="assets/img/produto-4.jpg" alt=""></a>
                <h4>Blusa de Frio</h4>
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
       <!--FIM LINHA PRODUTOS EM DESTAQUE-->
       
        <h2 class="titulo">Novidades</h2>

         <!--INCÍCIO LINHA PRODUTOS EM DESTAQUE--> 
         <div class="linha">
            <!--INÍCIO ITEM PRODUTOS EM DESTAQUE-->
                <div class="col-4">
                    <a href="ver-produto.php" title="">
                    <img src="assets/img/produto-5.jpg" alt=""></a>
                    <h4>Calça jeans Rasgada</h4>
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
                <a href="ver-produto.php" title="">
                <img src="assets/img/produto-6.jpg" alt=""></a>
                <h4>Conjunto Moletom Branco</h4>
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
                <a href="ver-produto.php" title="">
                <img src="assets/img/produto-7.jpg" alt=""></a>
                <h4>Camisa Básica s/ Estampa</h4>
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
                <a href="ver-produto.php">
                <img src="assets/img/produto-8.jpg" alt=""></a>
                <h4>Calça Estampada</h4>
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
                <a href="ver-produto.php">
                <img src="assets/img/produto-9.jpg" alt=""></a>
                <h4>Jaqueta Bege</h4>
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
            <a href="ver-produto.php"><img src="assets/img/produto-10.jpg" alt=""></a>
            <h4>Short Bege</h4>
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
            <a href="ver-produto.php"><img src="assets/img/produto-11.jpg" alt=""></a>
            <h4>Gola Polo Azul</h4>
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
            <a href="ver-produto.php"><img src="assets/img/produto-12.jpg" alt=""></a>
            <h4>Conjunto Blazer</h4>
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
       <!--FIM LINHA PRODUTOS EM DESTAQUE-->

     </div>
    <!--FIM PRODUTOS EM DESTAQUE-->

    <!--INÍCIO OFERTAS PRODUTOS EM DESTAQUE-->
     <div class="ofertas">

        <div class="corpo-categorias">
            <div class="linha">

                <div class="col-2">
                    <img src="assets/img/ludmila-nike.png" alt="" class="oferta-img">
                </div>

                <div class="col-2">
                    <h1>Pise com <span>Estilo</span> e <span>Confiança</span></h1>
                    <small>Dê asas ao seu estilo com os <span>tênis Nike</span> - o equilíbrio perfeito entre moda e funcionalidade.</small>
                    <br><br><a href="" class="btn">Comprar agora &#8594;</a>
                </div>

            </div>
        </div>

     </div>
    <!--FIM OFERTAS PRODUTOS EM DESTAQUE-->

    <!--INÍCIO DEPOIMENTOS-->
    <div class="depoimentos">
        <div class="corpo-categorias">
            <div class="linha">
                <!--INÍCIO ITEM DEPOIMENTOS-->
                    <div class="col-3">
                        <ion-icon name="ribbon" class="depoimento-icone"></ion-icon>
                        <p>"As roupas que comprei aqui são incríveis. Qualidade excepcional!"

                        </p>
                        <div class="classificacao">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        <img src="assets/img/cliente-1.png" alt="">
                        <h3>Camille Rodrigues</h3>
                    </div>
                <!--FIM ITEM DEPOIMENTOS-->

                <!--INÍCIO ITEM DEPOIMENTOS-->
                <div class="col-3">
                    <ion-icon name="ribbon" class="depoimento-icone"></ion-icon>
                    <p>"Adorei minhas novas roupas! Estilo e conforto em uma só peça."</p>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <img src="assets/img/cliente-2.png" alt="">
                    <h3>Matheus Dias</h3>
                </div>
            <!--FIM ITEM DEPOIMENTOS-->

            <!--INÍCIO ITEM DEPOIMENTOS-->
            <div class="col-3">
                <ion-icon name="ribbon" class="depoimento-icone"></ion-icon>
                <p>"A qualidade das peças superou minhas expectativas. Muito feliz!"

                </p>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <img src="assets/img/cliente-3.png" alt="">
                <h3>Thiago Henrique</h3>
            </div>
        <!--FIM ITEM DEPOIMENTOS-->
            </div>
        </div>
    </div>
    <!--FIM DEPOIMENTOS-->

    <!--INÍCIO MARCAS-->

       <div class="marcas">
            <div class="corpo-categorias">
                <div class="linha">

                    <div class="col-5">
                        <img src="assets/img/logo-nike.png" alt="">
                    </div>

                    <div class="col-5">
                        <img src="assets/img/logo-projecao.png" alt="">
                    </div>

                    <div class="col-5">
                        <img src="assets/img/logo-jeans.png" alt="">
                    </div>

                </div>
            </div>
       </div>

    <!--FIM MARCAS-->

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
        </div>

       </footer>

    <!--FIM RODAPÉ-->






    
 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>