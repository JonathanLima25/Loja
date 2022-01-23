<?php

require './vendor/autoload.php';

$smarty = new Template();



//Valores para template
$smarty->assign('NOME', 'JONATHAN DE LIMA FERREIRA');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CADASTRO_PRODUTO', Rotas::pag_CadastroProduto());
$smarty->assign('PAG_CADASTRO', Rotas::pag_Cadastro());
$smarty->assign('PAG_MINHA_CONTA', Rotas::pag_MinhaConta());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);



$smarty->display('index.tpl');

?>