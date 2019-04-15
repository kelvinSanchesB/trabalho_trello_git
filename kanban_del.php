<?php 
	$id = $_GET['id'];
	if(ISSET($_POST['sim'])){
		//echo "Falta o codigo";
		$sql = "DELETE FROM kanban_bd WHERE id =$id";
		include "conec-kanban.php";
		$tabela1 = $meca -> prepare($sql);
		$tabela1 -> execute();
		$meca = null;
		header("location: kanban2.php");
	}
	//echo $id."<br>";
	//echo $nome;
?>
<html>
	<head>
	
	</head>
	<body>
		<h3>
			Excluir <?php echo $id;?>?
		<h3>
		<form action="#" method="POST">
			<INPUT type="button" value="Não" onClick="JavaScript: window.history.back();">
			<input type ="submit" name="sim" value="Sim">
		</form>
	</body>
	
</html>
