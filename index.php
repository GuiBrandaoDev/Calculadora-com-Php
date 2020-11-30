<!doctype html>
	<html lang="pt-br">
	<head>
		<meta charset='utf8'>
		<title>Calculadora</title>
		
		<style>
			body {
				font-family: Verdana;
				background-color: #4682B4;
			}
			
			.optext {
					text-align: center;
			}
			
			p {
				display: inline;
			}
			
			#container {
				
				background-color: #B0C4DE;
				width: 400px;
				height: 400px;
				margin: 0 auto 0 auto;
				border-color: #B0C4DE;
				border-radius: 10px;
				box-shadow: #000 4px 5px 6px;
				position: relative;
				place-items: center;
			}
			
			.ope {
				position: relative;
				padding-top: 20px;
				text-align: center;
			}
			
			
			#num {
				margin-left: 10%;
				position: relative;
				padding-top: 40px;
			}
			
			.btn input[type=submit]{
				margin-left: 70%;
				border:1px solid #4682B4;
				border-radius:4px;
				display:inline-block;
				cursor:pointer;
				font-family:Verdana;
				font-weight:bold;
				font-size:13px;
				padding:6px 10px;
				text-decoration:none;
				
			}
			
			.btn {
				padding-top: 30%;
			}

		
		</style>
	</head>
	
	<body>
		<div class="optext">
		<h1>CALCULADORA</h1>
			<p style='padding: 5%;'>(1) Adição</p>
			<p style='padding: 5%;'>(2) Subtração</p>
			<p style='padding: 5%;'>(3) Multiplicação</p>
			<p style='padding: 5%;'>(4) Divisão</p><hr>
		</div>
		
		<div id="container">
		<div class="ope">
		<form action="cod.php" method="POST">
		 <p style='text-align: center; font-size: 20px;'>Escolha a operação</p><br>
		<div class="e_op">
		<input type="number" name="op" min="1" max="4"><br>
		</div>
		</div>
		
		<HR>
		
		<div id="num">
			Primeiro Numero<br>
			<input type="text" name="num1"><br>
			Segundo Numero<br>
			<input type="text" name="num2"><br>
		</div>
		<div class="btn">
			<input type="submit" value="Calcular">
		</div>
		
		</div>
	</body>
</html>