<?php
include("../conexion.php");

$nombreM		=$_POST['nombreM'];
$apM			=$_POST['apM'];
$amM			=$_POST['amM'];
$ciM			=$_POST['ciM'];
$email			=$_POST['email'];
$celM			=$_POST['celM'];
$cargo			=2;
$contrasenia	=md5($ciM);


$buscar = "SELECT * FROM mesa WHERE ciM='$ciM' AND nombreM='$nombreM' ";
$resulB = $link->query($buscar);
if(mysqli_num_rows($resulB)>0){
	echo "Ese juez de mesa Existe";
	echo "<a href='index.php'> << REGRESAR </a>";
}else{
	$insertar = "INSERT INTO  mesa (nombreM,apM,amM,ciM,celM) VALUES ('$nombreM','$apM','$amM','$ciM','$celM')";
		if($resul = $link->query($insertar)){

			$id_registros =mysqli_insert_id($link);

			$insertar1 = "INSERT INTO dat_admin (id_registros,usuario,contrasenia,ap,am,nom,correo,cargo) VALUES (
			  '$id_registros','$nombreM','$contrasenia','$apM','$amM','$nombreM','$email','$cargo')";
			if($result1 = $link->query($insertar1)){
				echo "Exito";
				echo "<a href='index.php'> REGRESAR </a>";
			}else{
				echo "Error";
			echo "<a href='index.php'> REGRESAR </a>";
			}

		}else{echo "error";}
}
/*
		$insertar = "INSERT INTO  mesa (nombreM,apM,amM,ciM,celM) VALUES ('$nombreM','$apM','$amM','$ciM','$celM')";
		if($resul = $link->query($insertar)){

			$id_registros =mysqli_insert_id($link);

			$insertar1 = "INSERT INTO dat_admin (id_registros,usuario,contrasenia,ap,am,nom,correo,cargo) VALUES (
			  '$id_registros','$nombreM','$contrasenia','$apM','$amM','$nombreM','$email','$cargo')";
			if($result1 = $link->query($insertar1)){
				echo "Exito";
				echo "<a href='index.php'> REGRESAR </a>";
			}else{
				echo "Error";
			echo "<a href='index.php'> REGRESAR </a>";
			}

		}else{echo "error";}
----------------------------------------------------------------------------------		
$buscar = "SELECT * FROM jugadores WHERE ci='$ci' AND nombreM='$nombreM' ";
$resulB = $link->query($buscar);
if(mysqli_num_rows($resulB)>0){
	echo "Ese juez de mesa Existe";
	echo "<a href='index.php'> << REGRESAR </a>";
}else{
	$insertar = "INSERT INTO jugadores (id_registros,usuario,contrasenia,ap,am,nom,correo,cargo) VALUES (
			  '$id_registros','$nombreM','$contrasenia','$apM','$amM','$nombreM','$email','$cargo')";
	if($resultado = $link->query($insertar)){
		echo "Juez mesa Registrado CORRECTAMENTE --> ";
		echo "<a href='index.php'> << REGRESAR </a>";

	}else{echo "Error";}
}
*/

?>
