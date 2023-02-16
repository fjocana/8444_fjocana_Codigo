<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script src="./script/script.js"></script>
</head>

<body style="background-image: url('Imagenes/fondo.jpg'); background-repeat: no-repeat; background-size: cover;">
		</br></br></br>
		<div id="fixed">
			</br></br></br>
			<div style="padding-left:510px;">
				<img src="Imagenes/selloespe.jpg" alt="ESPE" height="150" >
			</div>
		</br>
			<center>
				<h2>
					<p>DEPARTAMENTO DE CIENCIAS DE LA COMPUTACIÓN</p>
					<p>INGENIERÍA EN TECNOLOGIAS</p>
				</h2>
				<h3>
					<p>APLICACIONES DE TECNOLOGIAS WEB - EJERCICIO AUTONOMO</p>
				</h3>
			</center>
			<div style="padding-left:90px;">
				<h3><p>Integrante: Francisco Ocaña</p></h3>
				<h3><p>NRC: 8444</p></h3>
				<h3><p>Fecha: 16 de Febrero del 2023</p></h3>
				
			</div>						
		</div> 

	<?php
		include("include/class.figura.php");
		include("include/Interface.formulas.php");
		include("figuras/class.cuadrado.php");
		include("figuras/class.rectangulo.php");
		include("figuras/class.triangulo.php");
		
		if(isset($_GET['calcular'])){
			switch($_GET['tipo']){
				case "cuadrado": 
					$objCuadrado = new cuadrado($_GET['lado_1']);
					break;
				case "rectangulo": 
					$objRectangulo = new rectangulo($_GET['lado_1'],$_GET['lado_2']);
					break;
				case "triangulo": 
					$objTriangulo = new triangulo($_GET['lado_1'],$_GET['lado_2'],$_GET['lado_3']);
			}
			
		}

		echo figura::get_form();
		
	?>
</body>
</html>