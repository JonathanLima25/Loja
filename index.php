<?php

require './vendor/autoload.php';

$smarty = new Template();
Rotas::get_pagina();



//Valores para template
$smarty->assign('NOME', 'JONATHAN DE LIMA FERREIRA');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());


//echo Rotas::get_SiteTEMA();

$smarty->display('index.tpl');

?>