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
    <title>Minha Conta</title>
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
                                              
                        <li><a href="minha-conta.php" title="">Minha Conta</a></li>
                    </ul>
                </nav>
                <!--FIM MENU NAVEGAÇÃO TOPO-->
             

                <img src="assets/img/menu-preto.png" alt="" class="menu-celular" onclick="menucelular()">

            </div>
            <!--FIM NAVEGAÇÃO TOPO-->

        </div>
        <!--FIM CONTAINER-->

    </div>
    <!--FIM BANNER MATHEUS DIAS-->


    <!--INÍCIO MINHA CONTA-->

        <div class="minha-conta">

            <div class="container">
                <div class="linha">

                    <div class="col-2">
                        <img src="assets/img/casal-banner-cortado.png" alt="" width="100%">
                    </div>

                    <div class="col-2">
                        <div class="formulario">

                            <div class="btn-form">
                                <span onclick="Entrar()">Entrar</span>
                                <span onclick="Cadastro()">Cadastro</span>
                                <hr id="indicador">
                            </div>

                           <form action="" method="post" id="EntrarPainel">
                                <input type="email" name="email" id="" placeholder="E-mail de acesso">
                                <input type="password" name="senha" id="" placeholder="Digite sua senha">
                                <button type="submit" name="senEntrar" class="btn">Entrar</button>
                                <a href="" title="">Esqueceu sua senha?</a>
                           </form>

                           <form action="" method="post" id="CadastroSite">
                                <input type="text" name="nome" id="" placeholder="Nome completo">
                                <input type="email" name="email" id="" placeholder="E-mail de acesso">
                                <input type="password" name="senha" id="" placeholder="Digite sua senha">
                                <button type="submit" name="sendCad" class="btn">Cadastre-se</button>
                           </form>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    <!--FIM MINHA CONTA-->




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
    <script src="assets/js/login.js"></script>
</body>

</html>