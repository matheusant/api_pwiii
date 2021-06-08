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
		$stmt = $this->con->prepare("SELECT codJogo, imagem, nomeJogo, generoJogo, dataLanc, precoJogo FROM tbjogos");
		$stmt->execute();
		$stmt->bind_result($codJogo, $imagem, $nomeJogo, $generoJogo, $dataLanc, $precoJogo);
		
		$produtos = array(); 
		
		while($stmt->fetch()){
			$produto  = array();
			$produto['codJogo'] = $codJogo; 
			$produto['imagem'] = $imagem; 
			$produto['nomeJogo'] = $nomeJogo; 
			$produto['generoJogo'] = $generoJogo; 
			$produto['dataLanc'] = $dataLanc;
			$produto['precoJogo'] = $precoJogo; 
			
			array_push($produtos, $produto); 
		}
		
		return $produtos; 
	}
	
}