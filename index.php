<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script src="./script/script.js"></script>
</head>

<body style="background-image: url('Imagenes/fondo.jpg'); background-repeat: no-repeat; background-size: cover;">
	</br></br></br></br></br></br></br></br></br></br></br></br>

	<center><h1>TRABAJO AUTONOMO</h1></center>
	<?php



		include("include/class.figura.php");
		include("include/Interface.formulas.php");
		include("figuras/class.cuadrado.php");
		include("figuras/class.rectangulo.php");
		include("figuras/class.triangulo.php");
		
		// METODO GET 
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
	</br></br>
	<center>
	<button onclick="window.location.href='index.html'">Menu principal</button>
	</center>
</body>
</html>
