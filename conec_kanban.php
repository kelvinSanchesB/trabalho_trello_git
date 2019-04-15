<?php
	try{//tente
		$meca = new PDO("mysql:host=localhost;dbname=kanban_bd","root","");//php data object
		//echo "conexao efetuada com sucesso!!!!";
	}
	catch (PDOException $e){//Bloco corresondente ao try
		// testar Var_dump($e);
		//teste metodo echo $e->get.Code();
		echo $e->getMessage();//metodo amplamento utilizado
		
	}
	
?>
