<?php
include("conexion.php");

$email 			=$_POST['email'];
$ci 			=$_POST['ci'];
$nom			=$_POST['nom'];
$ap				=$_POST['ap'];
$am				=$_POST['am'];
$pais			=$_POST['pais'];
$cel			=$_POST['cel'];
$ciudad			=$_POST['ciudad'];
$provincia		=$_POST['provincia'];
$cargo			=1;
$contrasenia	=md5($ci);

$consultar = "SELECT * FROM registros WHERE nom='$nom' AND ci='$ci' ";
if($resultado = $link->query($consultar)){
	if(mysqli_num_rows($resultado)>0){
		echo "Delegdo existe en la Base de datos";
		echo "<a href='RegistrarDelegado.php'> REGRESAR </a>";
	}else{

		$insertar = "INSERT INTO  registros (email,ci,nom,ap,am,pais,ciudad,provincia,cel,cargo) VALUES ('$email','$ci','$nom','$ap','$am','$pais','$ciudad','$provincia','$cel','$cargo')";
		if($resul = $link->query($insertar)){

			$id_registros =mysqli_insert_id($link);

			$insertar1 = "INSERT INTO dat_admin (id_registros,usuario,contrasenia,ap,am,nom,correo,cargo) VALUES('$id_registros',
			'$nom','$contrasenia','$ap','$am','$nom','$email','$cargo')";
			if($result1 = $link->query($insertar1)){
				echo "Exito";
				echo "<a href='index.php'> REGRESAR </a>";
			}else{
				echo "Error";
			echo "<a href='index.php'> REGRESAR </a>";
			}

		}else{echo "error";}

	}
}
else
	{echo "Error en la consulta";}

?>