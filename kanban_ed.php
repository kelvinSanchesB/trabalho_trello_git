<!DOCTYPE html>
<?php 
	$id = $_GET['id'];
	$sql = "SELECT * FROM kanban_bd WHERE id =$id";
	include "conec_kanban.php";
	$contato = $meca -> prepare($sql);
	$contato -> execute();
	foreach($contato as $bolacha){};
	if(ISSET($_POST['salvar'])){
		$desc1 = $_POST['desc1'];
		$data1 = $_POST["data1"];
		$tipo = $_POST["tipo"];
		$sql="UPDATE contatos_bd 
			 SET
			 descricao        ='$desc1',
			 data  ='$data1',
			 tipo ='$tipo',
			 WHERE
			 id ='$id'";
		$contato = $meca -> prepare($sql);
		$contato -> execute();
		$meca = NULL;
		header("Location: kanban2.php");
	}
	
?>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Contatos</title>
		<link rel="stylesheet" href="jquery-ui.css">
		<link rel="stylesheet" href="data.css">
	</head>
	<body style="background-color:grey;">
		<center>
			<hr>
			<h2> Editar</h2>
			<hr>
			<form action="#" method="POST">
				descrição:<br>
				<input type="text" name="desc1" value="<?php echo $bolacha['desc1'];?>"><br><br>
				data:<br>
				<input type="text" name="data1" value="<?php echo $bolacha['data1'];?>"><br><br>
				<input type="text" id="to" name="to" value="<?php echo $bolacha['data1'];?>"><br><br>
				tipo:<br>
				<select name="tipo" value="<?php echo $bolacha['tipo'];?>">
					<option></option>
					<option value="1">fazer</option>
					<option value="2">fazendo</option>
					<option value="3">feito</option>
				</select><br><br>
				<input type="submit" value="Salvar" name="salvar">
			</form>
		</center>
	 </body>
</html>
<script>
	$( function() {
		var dateFormat = "mm/dd/yy",
			from = $( "#from" )
				.datepicker({
					defaultDate: "+1w",
					changeMonth: true,
					numberOfMonths: 1
				})
				.on( "change", function() {
					to.datepicker( "option", "minDate", getDate( this ) );
				}),
			entrega = $( "#to" ).datepicker({
				defaultDate: "+1w",
				changeMonth: true,
				numberOfMonths: 1
			})
			.on( "change", function() {
				from.datepicker( "option", "maxDate", getDate( this ) );
			});

		function getDate( element ) {
			var date;
			try {
				date = $.datepicker.parseDate( dateFormat, element.value );
			} catch( error ) {
				date = null;
			}

			return date;
		}
	} );
	</script>
