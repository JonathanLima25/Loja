<?php

class Rotas{

    public static $pag;

    static function get_pagina()
    {
        if (isset($_GET['pag'])){
            $pagina = $_GET['pag'];
            self::$pag = explode('/', $pagina);
            
            $pagina = 'controller/' .self::$pag[0].'.php';
            if(file_exists($pagina)){
                include $pagina;
            }else{
                include 'erro.php';
        }
        }
    }
}


?>