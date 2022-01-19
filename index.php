<?php

require './vendor/autoload.php';

$smarty = new Template();




//Valores para template
$smarty->assign('NOME', 'JONATHAN DE LIMA FERREIRA');
$smarty->display('index.tpl');

?>