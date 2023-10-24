<?php

ob_start();
require('../../sheep_core/config.php');

$carrinho = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(isset($carrinho['addcarrinho'])){
    unset($carrinho['addcarrinho']);
    $carrinho['capa'] = ($_FILES['capa']['tmp_name'] ? $FILES['capa'] : null);

    $salvar = new carrinho();
    $salvar->addCarrinho($carrinho);

    if($salvar->getResultado()){
        header("Location: ".HOME."/index.php?sucesso=true");
    }else{
        header("Location: ".HOME."/index.php?erro=true");
    }
}


?>