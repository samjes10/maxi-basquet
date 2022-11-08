<?php
include("../conexion.php");
#REGISTRO DE JUGADORES EN LA TABLA Y COMPARACION CON LOS IDES PARA QUE ESTE REGISTRADO POR EQUIPO	

$nombJ		=$_POST['nombJ'];
$apJ		=$_POST['apJ'];
$amJ		=$_POST['amJ'];
$paisJ		=$_POST['paisJ'];
$edadJ		=$_POST['edadJ'];
$id_equipo	=$_POST['id_equipo'];
$numJ		=$_POST['numJ'];
$ci			=$_POST['ci'];

$buscar = "SELECT * FROM jugadores WHERE ci='$ci' AND nombJ='$nombJ' ";
$resulB = $link->query($buscar);
if(mysqli_num_rows($resulB)>0){
	echo "Ese jugador Existe";
	echo "<a href='index.php'> << REGRESAR </a>";
}else{
	$insertar = "INSERT INTO jugadores (nombJ,apJ,amJ,paisJ,edadJ,id_equipo,numJ,ci) 
	VALUES ('$nombJ','$apJ','$amJ','$paisJ','$edadJ','$id_equipo','$numJ','$ci')";
	if($resultado = $link->query($insertar)){
		echo "Jugador Registrado CORRECTAMENTE --> ";
		echo "<a href='index.php'> << REGRESAR </a>";

	}else{echo "Error";}
}















?>