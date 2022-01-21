<?php

require './vendor/autoload.php';

$smarty = new Template();



//Valores para template
$smarty->assign('NOME', 'JONATHAN DE LIMA FERREIRA');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHA_CONTA', Rotas::pag_MinhaConta());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);



$smarty->display('index.tpl');

?>