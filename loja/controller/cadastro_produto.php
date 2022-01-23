<?php
extract($_POST, EXTR_PREFIX_ALL, 'p');
$smarty = new Template();
$smarty->assign('CADASTRO_PRODUTOS', 'Página de Cadastro de Produtos');
$produtos = new Produtos();

$smarty->display('cadastro_produto.tpl');


//if (isset($_POST["txtinputnome"]))
//{
//    echo $_POST["txtinputnome"] . "A L O U";
//    $produtos->SetProdutos($_POST["txtinputnome"], $_POST["txtinputdesc"], $_POST["txtinputquantidade"], $_POST["txtinputvalor"], '03.jpg');

//}

?>