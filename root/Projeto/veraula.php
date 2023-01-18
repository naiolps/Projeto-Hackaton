<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<style>
		body {
	 	background-image:url("https://static.wixstatic.com/media/65b880_625b1baaaca44ba6970cccf8dd850274~mv2.gif");
	 	background-repeat: no-repeat;
	 	background-position: center;
	 	background-size: cover;
	 	height: 100vh;
	 }
	 div{
		 color:white;
	 }
	</style>  
</head>
  <body>
  	<h1 style="background-color:#4A178A; color: white; text-align: center;">CONSULTA CLIENTE</h1>
    <div class="container">
	<br>
		<div class="row">
			
			<div class="col">
				<?php
					$arquivo = fopen("cadastro/clientes.txt", "r") or die("Não foi possível abrir o arquivo");
					echo nl2br(fread($arquivo,filesize("cadastro/clientes.txt")));
					fclose($arquivo);
				?>
			</div>
			
		</div>
		<div class="text-center">
			<button type="button" class="btn btn-danger" onclick="javascript:location.href ='menu.php';">Voltar</button>
		</div>
	</div>
  </body>
</html>