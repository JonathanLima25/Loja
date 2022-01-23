<?php 
Class Produtos extends Conexao{
	function __construct(){
		parent::__construct();
	}

	function SetProdutos($pro_nome, $pro_desc, $pro_quant,$pro_valor, $pro_img){
		$query = "INSERT INTO {$this->prefix}produtos" . " (pro_nome, pro_desc, pro_quant, pro_valor, pro_img) " . 
			"VALUES ('{$pro_nome}', '{$pro_desc}', $pro_quant,$pro_valor, '{$pro_img}')";
		
		$this->ExecuteSQL($query);
	}

	function GetProdutos(){
		$query = "SELECT * FROM {$this->prefix}produtos";

		$query .= " ORDER BY pro_id DESC";

		$this->ExecuteSQL($query);

		$this->GetLista();
		
	}

	function GetProdutosID($id){
		$query = "SELECT * FROM {$this->prefix}produtos p";

		$query .= " WHERE pro_id = {$id}";

		$this->ExecuteSQL($query);

		$this->GetLista();
		
	}

	private function GetLista(){
		$i = 1;
		while($lista = $this->ListarDados()):
		$this->itens[$i] = array(
			 'pro_id' => $lista['pro_id'],
			 'pro_nome'  => $lista['pro_nome'] ,  
	         'pro_desc'  => $lista['pro_desc'] ,     
	         'pro_valor'   => $lista['pro_valor'],       
	        'pro_img'     => Rotas::ImageLink($lista['pro_img'], 180, 180) ,  
	        'pro_img_g'     => Rotas::ImageLink($lista['pro_img'], 300, 300) , 
	        'pro_img_p'     => Rotas::ImageLink($lista['pro_img'], 70, 70) 
	           
			);

		$i++;
		endwhile;
	}
}

?>