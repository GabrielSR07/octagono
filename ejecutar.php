<html>
 <head>
 <meta charset="utf-8">
 <title>Cálculo de área de un Octágono regular</title>
 </head>
 <body>
 <?php

 if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {

	 $lado = $_POST['lado'];
	 $area = 0;
	 $ap= 0;

	 if(isset($_POST['lado']) && !empty($_POST['lado'])) {

	 	$area = ((4.83) * pow($lado, 2));
	 	$ap = ($area/(4*$lado));

		 echo "<h2 align='center'>Datos del octágono en cuestión</h2>";
		 echo "<h2 align='center'>Longitud de sus lados:" . $lado ."</h2>";
		 echo "<h2 align='center'>Apotema del octagono:" . $ap ."</h2>";
		 echo "<h2 align='center'>Area del octagono:" . $area ."</h2>";

		 echo "<br/><br/>";
		 echo "<a href='datos.html'>Volver a la pagina anterior</a>";
		 unset($_POST['btn']);
		 unset($_POST['lado']);

 } else {
 echo "<h2 align='center'>Datos del octágono en cuestión:</h2>";
 echo "<br><h2>El valor de Lado esta vacio, Verifique.</h2>";
 echo "<br/><br/>";
 echo "<a href='datos.html'>Volver al atras</a>";
 unset($_POST['btn']);
 unset($_POST['lado']);

 }
 }else{
 header('location: datos.html');
 }

 ?>
 </body>
</html>