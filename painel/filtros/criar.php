<?php

ob_start();
require('../../sheep_core/config.php');

$produto = filter_input_array(INPUT_POST, FILTER_DEFAULT);
IF(isset($produto['criarProduto'])){
    unset($produto['criarProduto']);
    $produto['capa'] = ($_FILES['capa']['tmp_name'] ? $_FILES['capa'] : null);
    
    $salvar = new Produtos();
    $salvar->Criarproduto($produto);

    if($salvar->getResultado()){
        header("Location:".HOME."/painel/index.php?sucesso=true");
    }else{
        header("Location:".HOME."/painel/index.php?erro=true");
    }
    
}


?>