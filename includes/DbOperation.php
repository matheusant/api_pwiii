<?php
 
class DbOperation
{
    
    private $con;
 
 
    function __construct()
    {
  
        require_once dirname(__FILE__) . '/DbConnect.php';
 
     
        $db = new DbConnect();
 

        $this->con = $db->connect();
    }
	
	
	function getJogos(){
		$stmt = $this->con->prepare("SELECT codigo, imagem, descricao, quantidade, valor, data FROM tbprodutos");
		$stmt->execute();
		$stmt->bind_result($codigo, $imagem, $descricao, $quantidade, $valor, $data);
		
		$produtos = array(); 
		
		while($stmt->fetch()){
			$produto  = array();
			$produto['codigo'] = $codigo; 
			$produto['imagem'] = $imagem; 
			$produto['descricao'] = $descricao; 
			$produto['quantidade'] = $quantidade; 
			$produto['valor'] = $valor;
			$produto['data'] = $data; 
			
			array_push($produtos, $produto); 
		}
		
		return $produtos; 
	}
	
}