<!doctype html>

<!-- CABECERA-->
<html lang="Es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/miestilo.css">
    <script src="js/all.js"></script>
  </head>
  <body class="fondo1">

<!--MENU-->
<?php include("navbar.php");?>
<!--FIN MENU--> 
    <!--Categoria-->
<div class="container">
 <div class="row">
   <div class="col-md-9">



<?php
include("conexion.php");

$mostrar="SELECT * FROM torneo ";
$resultado=$link->query($mostrar);
if (mysqli_num_rows($resultado)>0) {

$ver="SELECT * FROM torneo ORDER BY id_torneo DESC Limit 1";
$result=$link->query($ver);
while ($row=$result->fetch_assoc()) {
$nombreC    =$row['nombreC'];
$categoria  =$row['categoria'];
$fecha_ini  =$row['fecha_ini'];
$fecha_fin  =$row['fecha_fin'];
$f_inscrip  =$row['f_inscrip'];
$f_fin      =$row['f_fin'];
$f_preinsc  =$row['f_preinsc'];
$f_prefin   =$row['f_prefin'];
$descripT   =$row['descripT'];

$pinicio = date("d-m-Y", strtotime($f_preinsc));

}

?>
<div class="py-3 text-center"><h2><?php echo $nombreC.date("Y");?><span class="badge bg-danger">Nuevo</span></h2></div><hr>


<table class="table table-bordered table-hover">
  <tr>
    <td colspan="2" class="text-center fondo4">Descripción</td>
    <td colspan="2" class="text-center fondo5">PreInscripción</td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2"><?php echo $descripT;?></td>

    <td>Fecha de Inicio</td>
    <td><?php echo date("d-m-Y", strtotime($f_preinsc));?></td>
  </tr>
  <tr>

    <td>Fecha Final</td>
    <td><?php echo date("d-m-Y", strtotime($f_prefin));?></td>
  </tr>

<tr>
  <td colspan="2" class="text-center fondo5">Fecha del TORNEO</td>
  <td colspan="2" class="text-center fondo5">Inscripción</td>
 </tr>
 <tr>
   <td>Fecha Inicio</td>
   <td><?php echo date("d-m-Y", strtotime($fecha_ini)); ?></td>
   <td>Fecha Inscrip</td>
   <td><?php echo date("d-m-Y", strtotime($f_inscrip)); ?></td>
 </tr>
 <tr>
   <td>Fecha Final</td>
   <td><?php echo date("d-m-Y", strtotime($fecha_fin)); ?></td>
   <td>Fecha Final Inscrip</td>
   <td><?php echo date("d-m-Y", strtotime($f_fin)); ?></td>
 </tr>

</table>

<?php 

?>
 </div>
   <div class="col-md-3">

<?php
$hoy = date('Y-m-d');
  if($f_prefin >= $hoy && $hoy >= $f_inscrip){
?>
  <div class="card">
  <img src="images/Logo-1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Registro de Delegados</h5>
    <p class="card-text">Registrate en este formulario</p>
    <a href="RegistrarDelegado.php" class="btn btn-primary">Ir al formulario</a>
  </div>
</div>

<?php
  }else{
 ?>
  <div class="card">
  <img src="images/Logo-1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Registro de Delegados</h5>
    <p class="card-text">Registro finalizado</p>
    <a href="#" class="btn btn-danger disabled" >Ir al formulario</a>
  </div>
</div> 

 <?php   
}

}else{
  echo "Todavia no existen torneos.";
}

?>
   </div>
 </div>
</div> 
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>