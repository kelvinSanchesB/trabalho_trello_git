<!DOCTYPE html>
<?php
	include "conec_kanban.php";
	$sql = "SELECT * FROM fazer ";
	$tabela1 = $meca -> prepare($sql);
	$tabela1 -> execute();
	if(ISSET($_POST['salvar']))
	{
		
		$id = "";
		$date1 = $_POST["to"];
		$desc1 = $_POST["desc1"];
		$tipo = $_POST["tipo1"];
		
		$sql2 = "INSERT INTO 
				fazer
				VALUES
				(?,?,?,?)";
				
		$tabela12 = $meca -> prepare($sql2);
		$tabela12 -> execute(array($id,$date1,$desc1,$tipo));
		echo "<script>window.history.back()</script>";
	}
	?>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Quiz geral</title>
	<link rel="stylesheet" href="kanban2.css">
	<link rel="stylesheet" href="jquery-ui.css">
	<link rel="stylesheet" href="data.css">
	<link rel="stylesheet" href="prelod.css">
	  <script src="pace.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	 <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
	 <script src="/pace/pace.js"></script>]
	 	<script type="text/javascript">
	
				$(document).ready(function(){
				$.ajax({
				url: 'kanban_tb1.php',
				success: function(data) {
				$('#fazer_tb').html(data);
				},
				beforeSend: function(){
				},
				complete: function(){
				}
				});
				});
	
				$(document).ready(function(){
				$.ajax({
				url: 'kanban_tb2.php',
				success: function(data) {
				$('#fazendo_tb').html(data);
				},
				beforeSend: function(){
				},
				complete: function(){
				}
				});
				});
	
				$(document).ready(function(){
				$.ajax({
				url: 'kanban_tb3.php',
				success: function(data) {
				$('#feito_tb').html(data);
				},
				beforeSend: function(){
				},
				complete: function(){
				}
				});
				});
				/////////////////
	
				/// Quando usuário clicar em salvar será feito todos os passo abaixo
				// $('#but1').click(function() {
		 
					// var dados = $('#form1').serialize();
		 
					// $.ajax({
						// type: 'POST',
						// url: 'kanban_in.php',
						// async: true,
						// data: dados,
						// success: function(response) {
							// location.reload();
						// }
					// });
		 
					// return false;
				// });
				
				// function alterar_div() {
					// $.ajax({
					// type: "POST",
					// url: "kanban_in.php",
					// data: {
					// nome_usuario: $('#text1').val()
					// },
					// success: function(data) {
					// $('#fazer_tb').html(data);
					// }
					// });
				// }
	</script>

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

	function add(){
		document.getElementById("cadastro").style="display:block;"
		document.getElementById("add").style="display:none;"
	}
	function volt(){
		document.getElementById("cadastro").style="display:none;"
		document.getElementById("add").style="display:block;"
	}
	
	</script>

  </head>
  <body style="background-color:grey;">
  
	<center>
		<div id="add" >
				<input type="button" value="adicionar" onclick="add()"id="but2">
		</div>
		<div id="cadastro" style="display:none;">
			<form action="#" method="POST">
					descrição:<br>
					<input id="text1"type="text" name="desc1" required><br><br>
					data:<br>
					<input type="text" id="to" name="to" required><br><br>
					tipo:<br>
					<select  name="tipo1" required>
						<option value="1">fazer</option>
						<option value="2">fazendo</option>
						<option value="3">feito</option>
					</select><br><br>
					<input type="submit" value="criar" name="salvar" id="but1">
					<input type="button" value="voltar" onclick="volt()" id="voltar">
			</form>
		</div>                                                                 
		<div class="box">
			<h1>A fazer</h1>
			<div id="fazer">
				<table border="1" style="background-color:white; width:200px;" class="table table-bordered">                                                                         
				<thead id="tabledale">
					<tr>
						<!--<th>Id</th>-->
					
						<th>data</th>
						
						<th>descrição</th>
						
						<!--<th>tipo</th>-->
						
						<th>editar</th>
						
						<th>deletar</th>
					</tr>
					 </thead>
					 <tbody id="fazer_tb">

					</tbody>
				</table>
			</div>
		</div>
		<div class="box">
			<h1>Fazendo</h1>
			<div id="fazendo">
					<table border="1" style="background-color:white; width:200px;" class="table table-bordered">
					<thead id="tabledale">
					<tr>
						<!--<th>Id</th>-->
					
						<th>data</th>
						
						<th>descrição</th>
						
						<!--<th>tipo</th>-->
						
						<th>editar</th>
						
						<th>deletar</th>
					</tr>
					</thead>
					<tbody id="fazendo_tb">

					</tbody>
				</table>
			</div>
		</div>
		<div class="box">
			<h1>Feito</h1>
			<div id="feito">
					<table border="1" style="background-color:white; width:200px;" class="table table-bordered">
					<thead id="tabledale">
					<tr>
						<!--<th>Id</th>-->
					
						<th>data</th>
						
						<th>descrição</th>
						
						<!--<th>tipo</th>-->
						
						<th>editar</th>
						
						<th>deletar</th>
					</tr>
					</thead>
					<tbody id="feito_tb">

					</tbody>
				</table>
			</div>
		</div>
    </center>
  </body>
 </html>
