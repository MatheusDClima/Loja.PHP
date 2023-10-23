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
    <title>Produtos</title>
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


    <!--INÍCIO PRODUTOS EM DESTAQUE-->
        <div class="corpo-categorias">

                <div class="linha linha2">
                    <h2>Todos</h2>
                    
                    <select name="" id="">
                        <option value="">Mais comprados</option>
                        <option value="">Menor preço</option>
                        <option value="">Menor preço</option>
                    </select>
                    
                </div>
            <!--INCÍCIO LINHA PRODUTOS EM DESTAQUE--> 
                <div class="linha">
                    <!--INÍCIO ITEM PRODUTOS EM DESTAQUE-->
                        <div class="col-4">
                            <a href="ver-produto.php"><img src="assets/img/produto-1.jpg" alt=""></a>
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
                        <a href="ver-produto.php"><img src="assets/img/produto-2.jpg" alt=""></a>
                        <h4>Camisa Social
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
                        <a href="ver-produto.php"><img src="assets/img/produto-3.jpg" alt=""></a>
                        <h4>Jaqueta Jeans
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
                        <a href="ver-produto.php"><img src="assets/img/produto-4.jpg" alt=""></a>
                        <h4>Blusa de Frio
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
                        <a href="ver-produto.php"><img src="assets/img/produto-5.jpg" alt=""></a>
                        <h4>Calça jeans Rasgada
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
                    <a href="ver-produto.php"><img src="assets/img/produto-6.jpg" alt=""></a>
                    <h4>Conjunto Moletom Branco
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
                    <a href="ver-produto.php"><img src="assets/img/produto-7.jpg" alt=""></a>
                    <h4>Camisa Básica
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
                    <a href="ver-produto.php"><img src="assets/img/produto-8.jpg" alt=""></a>
                    <h4>Calça Estampada
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
                    <a href="ver-produto.php"><img src="assets/img/produto-9.jpg" alt=""></a>
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
                <a href="ver-produto.php"><img src="assets/img/produto-10.jpg" alt=""></a>
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
                <a href="ver-produto.php"><img src="assets/img/produto-11.jpg" alt=""></a>
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
                <a href="ver-produto.php"><img src="assets/img/produto-12.jpg" alt=""></a>
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
            
                <!--INÍCIO PAGINAÇÃO-->
                    <div class="paginacao">
                        <span>1</span>
                        <span>2</span>
                        <span>3</span>
                        <span>4</span>
                        <span>&#8594;</span>
                    </div>
                <!--FIM PAGINAÇÃO-->

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