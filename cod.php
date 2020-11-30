<html>
	<head>
		<title>Resutaldo</title>
		<style>
			body {
				background-color: #4682B4;
				font-family: verdana;
			}
			
			
			#oper	{
				padding-top: ;
				text-align: center;
				font-size: 50px;
			}
			
			.e {
				text-align: center;
				font-size: 20px;
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

		
		</style>
	</head>
	<body>
<?php
	$calc1 = $_POST["num1"];
	$calc2 = $_POST["num2"];
	$ope = $_POST["op"];
?>	
	<html>
		<style>
		
			* {
				position: relative;
				padding-top: 10px;
			}
			
			#oper {
								text-align: center;
				font-size: 20px;
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
			
			.resul {
				padding-top: 40px;
				font-size: 50px;
			}
		
			.e {
				padding-top: 20px;
			}
		
		</style>
	
	<h1 style="text-align: center;">Resultado da operação:</h1>
	<div id="oper">
	<?php
	'<div class= "e">';
	switch ($ope) {
		case "1";
			echo '<div class="texto">'.'Você escolheu operação: <br>ADIÇÃO<br>';
			$result = $calc1+$calc2;
			echo 'A soma entre '.$calc1.' e '. $calc2. ' é'.'</div>';
			echo '<div class="resul">'.$result.'</div>';
			break;
		case "2";
			echo '<div class="texto">'."Você escolheu operação: <br>SUBTRAÇÃO<br>";
			$result = $calc1-$calc2;
			echo 'A subtração entre '.$calc1.' e '. $calc2. ' é'.'</div>';
			echo '<div class="resul">'.$result.'</div>';
		break;
		case "3";
			echo '<div class="texto">'.'Você escolheu operação: <br>MULTIPLICAÇÃO<br>';
			$result = $calc1*$calc2;
			echo 'A multiplicação entre '.$calc1.' e '. $calc2. ' é'.'</div>';
			echo '<div class="resul">'.$result.'</div>';
		break;
		case "4";
			echo '<div class="texto">'.'Você escolheu operação: <br>DIVISÃO<br>';
			$result = $calc1/$calc2;
			echo 'A divisão entre '.$calc1.' e '. $calc2. ' é'.'</div>';
			echo '<div class="resul">'.$result.'</div>';
		break;
		default;
			echo "Operação Inválida";
	
	}
	?>
	</div>
	</html>

</html>