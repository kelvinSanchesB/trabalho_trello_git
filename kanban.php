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
		echo "<script>window.history.back()</script>";
		$tabela12 -> execute(array($id,$date1,$desc1,$tipo));
	}
	?>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Quiz geral</title>
	<link rel="stylesheet" href="kanban2.css">
	<link rel="stylesheet" href="jquery-ui.css">
	<link rel="stylesheet" href="data.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	 <!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
	// <script type="text/javascript">
		// $('#but1').click(function(){
		// $.ajax({
		// url: 'kanban2.php',
		// success: function() {
		// $('#fazer').html();
		// },
		// beforeSend: function(){
		// },
		// complete: function(){
		// }
		// });
		// });
	// </script>-->
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
  </head>
  <body style="background-color:grey;">
  
	<center>
		<div id="cadastro" >
			<form action="#" method="POST">
					<input id="text1"type="text" name="desc1" ><br><br>
					<input type="text" id="to" name="to"><br><br>
					<select  name="tipo1">
						<option></option>
						<option value="1">fazer</option>
						<option value="2">fazendo</option>
						<option value="3">feito</option>
					</select><br><br>
					<input type="submit" value="criar" name="salvar" id="but1">
			</form>
		</div>
		<div class="box">
			<h1>A fazer</h1>
			<div id="fazer">
				<table border="1" style="background-color:white; width:200px;">
					<tr>
						<th>Id</th>
					
						<th>data</th>
						
						<th>descrição</th>
						
						<th>tipo</th>
						
						<th>editar</th>
						
						<th>deletar</th>
					</tr>
					<?php
						include "conec_kanban.php";
						$sql = "SELECT * FROM fazer ";
						$tabela1 = $meca -> prepare($sql);
						$tabela1 -> execute();
											
					foreach($tabela1 as $bolacha){
						$id 	 = $bolacha['id'];
						$data1 	 = $bolacha['data'];
						$desc2 = $bolacha['descricao'];
						$tipo   = $bolacha['tipo'];
		
						// mostrando os valores em uma tabela
						if($tipo == '1'){
							echo "<tr>";
							echo "<td>$id</td>";
							echo "<td>".date("d/m/Y",strtotime($data1))."</td>";
							echo "<td>".$desc2."</td>";
							// echo "<td>".$desc2."</td>"
							echo "<td>".$tipo."</td>";
							echo "<td align=''>
								<a href='kanban_ed.php?id=$id' title='Editar $id'>
									<img src=''width='25px'>O
								</a>
							</td>;	
							<td align=''>
								&nbsp;&nbsp;
								<a href='kanban_del.php?id=$id&descricao=$desc2' title='Execluir $desc2'>
									<img src='' width='25px'>X
								</a>
							</td>";
							echo "</tr>";
						}
					}
					
					?>
				</table>
			</div>
		</div>
		<div class="box">
			<h1>Fazendo</h1>
			<div id="fazendo">
					<table border="1" style="background-color:white; width:200px;">
					<tr>
						<th>Id</th>
					
						<th>data</th>
						
						<th>descrição</th>
						
						<th>tipo</th>
						
						<th>editar</th>
						
						<th>deletar</th>
					</tr>
					<?php
						include "conec_kanban.php";
						$sql = "SELECT * FROM fazer ";
						$tabela1 = $meca -> prepare($sql);
						$tabela1 -> execute();
						
					foreach($tabela1 as $bolacha){
						$id 	 = $bolacha['id'];
						$data1 	 = $bolacha['data'];
						$desc2 = $bolacha['descricao'];
						$tipo   = $bolacha['tipo'];
		
						// mostrando os valores em uma tabela
						if($tipo == '2'){
						echo "<tr>";
							echo "<td>$id</td>";
							echo "<td>".date("d/m/Y",strtotime($data1))."</td>";
							echo "<td>".$desc2."</td>";
							// echo "<td>".$desc2."</td>"
							echo "<td>".$tipo."</td>";
							echo "<td align=''>
								<a href='kanban_ed.php?id=$id' title='Editar $id'>
									<img src=''width='25px'>O
								</a>
							</td>;	
							<td align=''>
								&nbsp;&nbsp;
								<a href='kanban_del.php?id=$id&descricao=$desc2' title='Execluir $desc2'>
									<img src='' width='25px'>X
								</a>
							</td>";
							echo "</tr>";
						}
					}
					?>
				</table>
			</div>
		</div>
		<div class="box">
			<h1>Feito</h1>
			<div id="feito">
					<table border="1" style="background-color:white; width:200px;">
					<tr>
						<th>Id</th>
					
						<th>data</th>
						
						<th>descrição</th>
						
						<th>tipo</th>
						
						<th>editar</th>
						
						<th>deletar</th>
					</tr>
					<?php
						include "conec_kanban.php";
						$sql = "SELECT * FROM fazer ";
						$tabela1 = $meca -> prepare($sql);
						$tabela1 -> execute();
						
					foreach($tabela1 as $bolacha){
						$id 	 = $bolacha['id'];
						$data1 	 = $bolacha['data'];
						$desc2 = $bolacha['descricao'];
						$tipo   = $bolacha['tipo'];
		
						// mostrando os valores em uma tabela
						if($tipo == '3'){
						echo "<tr>";
							echo "<td>$id</td>";
							echo "<td>".date("d/m/Y",strtotime($data1))."</td>";
							echo "<td>".$desc2."</td>";
							// echo "<td>".$desc2."</td>"
							echo "<td>".$tipo."</td>";
							echo "<td align=''>
								<a href='kanban_ed.php?id=$id' title='Editar $id'>
									<img src=''width='25px'>O
								</a>
							</td>;	
							&nbsp;&nbsp;
							<td align=''>
								
								<a href='kanban_del.php?id=$id&descricao=$desc2' title='Execluir $desc2'>
									<img src='' width='25px'>X
								</a>
							</td>";
							echo "</tr>";
						}
					}
					?>
				</table>
			</div>
		</div>
    </center>
  </body>
 </html>
