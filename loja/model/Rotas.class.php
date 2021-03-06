<?php

class Rotas{

    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';

    static function get_SiteHOME(){
        return Config::SITE_URL.'/'.Config::SITE_PASTA;
    }

    static function get_SiteRAIZ(){
        return $_SERVER['DOCUMENT_ROOT'].'/'.Config::SITE_PASTA;
    }
    
    static function get_SiteTEMA(){
        return self::get_SiteHOME().'/'.self::$pasta_view;
    }
    
    static function pag_CadastroProduto(){
        return self::get_SiteHOME().'/cadastro_produto';
    }
    
    static function pag_ProdutosInfo(){
        return self::get_SiteHOME().'/produtos_info';
    }

    static function pag_Produtos(){
        return self::get_SiteHOME().'/produtos';
    }
    
    static function pag_Cadastro(){
        return self::get_SiteHOME().'/cadastro';
    }
    
    static function pag_MinhaConta(){
        return self::get_SiteHOME().'/minhaconta';
    }

    static function get_ImagePasta(){
		return 'media/images/';
	}

	static function get_ImageURL(){
		return self::get_SiteHOME() .'/' .self::get_ImagePasta();

	}

	static function ImageLink($img, $largura, $altura){
		$imagem = self::get_ImageURL() .$img;

		return $imagem;

	}

    static function get_Pagina()
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