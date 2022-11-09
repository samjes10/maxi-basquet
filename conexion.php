<?php 
#-*CONEXION PARA LA BASE DE DATOS XAMPP*-
$servername = "ec2-44-207-253-50.compute-1.amazonaws.com";
$database = "d77ac7v76aafrj";
$username = "wlegllgkonwreq";
$password = "9aa04b445e9f2fc1ef632ac242cad2683c45b439e936914e4edc954d5b43787e";
// Create connection
$link = new mysqli($servername,$username,$password,$database) or die("Error ".mysql_error($link));
?>
