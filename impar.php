<!DOCTYPE html>
<html lang="pt-br">
 <head>
	<meta charset="utf-8">
	<title>Impar ou par</title>
	<style type="text/css">
	
	body
	{
		font-family: Verdana;
		background:linear-gradient
		(to right, rgb(239, 240, 235), rgb(45, 45, 45), rgb(76, 110, 145), rgb(49, 57, 76), rgb(209, 210, 205), rgb(140, 162, 176),
		rgb(243, 220, 140), rgb(199, 171, 88), rgb(250, 178, 34), rgb(138, 136, 77));
	}
	
	form
	{
		max-width: 600px;
		width: 70%;
		padding: 40px;
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		background-color: aliceblue;
		border-radius: 2px;
		padding: 20px;
	}
	
	</style>
 </head>
 <body>
	<form method="get" action="impar.php">
		Digite um número: 
	<input type="number" name="nm"><br>
	<input type="submit" name="submit" value="Testar" />
 </form> 
	<?php 
	$numero = $_GET['nm'];

		if($numero % 2 == 0)
		{
		
		echo"<script language='JavaScript'>
			window.alert('$numero é par')
			</script>";
		}
		else
		{
		
		echo"<script language='JavaScript'>
			window.alert('$numero é ímpar')
			</script>";
		
		}
	?>
 </body>
</html>