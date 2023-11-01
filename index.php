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

    <?php

    $cart = new ler();
    $cart->Leitura('carrinho');

    ?>

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
                        <li><a href="minha-conta.php" title="">Minha Conta</a></li>
                    </ul>
                </nav>
                <!--FIM MENU NAVEGAÇÃO TOPO-->

                
                <img src="assets/img/carrinho.png" alt="" width="30px" height="30px" class="carrinho-img">
                
                <p><?= $cart->getContaLinhas() > 0 ? $cart->getContaLinhas() : 0 ?></p>

                <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">

            </div>
            <!--FIM NAVEGAÇÃO TOPO-->
        </div>
        <!--FIM CONTAINER-->
    </div>
    <!--FIM BANNER-->

     <!--INÍCIO CARRINHO DE COMPRAS-->
        
     <div class="barraLateral">

            <div class="topoCarrinho">
                <p>Meu Carrinho</p>
            </div>        

        
        <?php 

            if($cart->getContaLinhas() > 0){
                foreach($cart->getResultado() as $carts){

                   
            $ler = new ler();
            $ler->Leitura('produtos', "WHERE id = :id ORDER BY data DESC", "id={$carts['id_produto']}");
            if ($ler->getResultado()) {
                foreach ($ler->getResultado() as $produto) {
                    $produto = (object) $produto;                    
        ?>
        <!--INÍCIO PRODUTO CARRINHO DE COMPRAS-->
        <div class="item-carrinho">

            <div class="linha-imagem">
                <img src="<?=HOME?>/uploads/<?=$produto->capa?>" alt="<?=$produto->nome?>" class="img-carrinho">
            </div>

                <p><?=$produto->nome?></p>
                <h2>R$ <?=$produto->valor?></h2>

            <form action="filtros/excluir.php" method="post">
                <input type="hidden" name="id_produto" value="<?=$produto->id?>">
                <button type="submit" style="border:none; background:none;"> <i class="fa fa-trash-o" aria-hidden="true">Remover</i>
                </button>
            </form>

        </div>
        <!--FIM PRODUTO CARRINHO DE COMPRAS-->
        
        <?php 

                    }
                } 
            }
            }else{
        ?>
        
          <div class="item-carrinho-vazio">Seu carrinho está vazio!</div>
          <?php        
            }
        ?>

        <?php 
            $totalCarrinho = new ler();
            $totalCarrinho->LeituraCompleta("SELECT SUM(valor) as total from carrinho");
            if($totalCarrinho->getResultado()){
                $totalCompras = number_format($totalCarrinho->getResultado()[0]['total'], 2,',','.');
            }else{
                $totalCompras = 0;
            }
        
        ?>

        <div class="rodape-carrinho">
            <h3>Total</h3>
            <h2>R$ <?=$totalCompras?></h2>
        </div>

    </div>
    <!--FIM CARRINHO DE COMPRAS-->



    <!--INÍCIO PRODUTOS EM DESTAQUE-->
    <div class="corpo-categorias">

        <h2 class="titulo">Produtos em Destaque</h2>


        <!--INCÍCIO LINHA PRODUTOS EM DESTAQUE-->
        <div class="linha">

            <?php

            $ler = new ler();
            $ler->Leitura('produtos', "ORDER BY data DESC");
            if ($ler->getResultado()) {
                foreach ($ler->getResultado() as $produto) {
                    $produto = (object) $produto;

            ?>
                
                <!--INÍCIO ITEM PRODUTOS EM DESTAQUE-->
                    
                     <div class="col-4">
                        <form action="filtros/criar.php" method="post">
                            <div class="imgProduto">
                                <img src="<?=HOME?>/uploads/<?=$produto->capa?>" alt="<?=$produto->nome?>" id="produtoImg">
                            </div>
                            <h4><?=$produto->nome?></h4>
                            <div class="classificacao">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <p>R$ <?=$produto->valor?>,00</p>
                            <input type="hidden" name="id_produto" value="<?= $produto->id ?>">
                            <input type="hidden" name="valor" value="<?= $produto->valor ?>">
                            <button type="submit" class="btn" name="addcarrinho">Adicionar ao Carrinho</button>
                        </form>
                      </div>
                    
                    <!--FIM ITEM PRODUTOS EM DESTAQUE-->

             <?php
                    
                }
            }
        

            ?>

        </div>
        <!--FIM LINHA PRODUTOS EM DESTAQUE-->

    </div>
    <!--FIM PRODUTOS EM DESTAQUE-->

    

    <!--INÍCIO BANNER PRODUTOS EM DESTAQUE-->
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
    <!--FIM BANNER PRODUTOS EM DESTAQUE-->

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