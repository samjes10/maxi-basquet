<?php 
#-*CONEXION PARA LA BASE DE DATOS XAMPP*-
$servername = "localhost";
$database = "maxibasquet";
$username = "root";
$password = "root123";
// Create connection
$link = new mysqli($servername,$username,$password,$database) or die("Error ".mysql_error($link));
?>