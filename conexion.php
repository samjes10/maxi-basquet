<?php 
#-*CONEXION PARA LA BASE DE DATOS XAMPP*-
$Host = "ec2-44-207-253-50.compute-1.amazonaws.com";
$Database = "d77ac7v76aafrj";
$User = "wlegllgkonwreq";
$Port = "5432"
$Password = "9aa04b445e9f2fc1ef632ac242cad2683c45b439e936914e4edc954d5b43787e";
// Create connection

$strCnx = "host=$Host port=$Port dbname=$Database user=$User password=$Password";
$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
echo "Conexion exitosa <hr>";

?>
