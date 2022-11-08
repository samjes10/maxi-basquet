<?php
#PARA INICIAR SESION Y ENLAZARSE CON OTRA CLASE Y SI ES EL CARGO QUE OCUPA O NO PARA DELEGADO
include("../sesion.class.php");
$sesion=new sesion();
$cargo=$sesion->get("cargo");
$usuario=$sesion->get("usuario");
#----------------------------------

#-----------------------------------

if ($cargo=='3') {
?>
<!doctype html>
<html lang="Es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mesa</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/miestilo.css">
    <script src="../js/all.js"></script>
  </head>
  <body class="fondo1">

<!--MENU-->
<?php include("navbar.php");?>
<!--FIN MENU--> 
    <!--Categoria-->
<div class="container">
<form action="torneo_proceso.php" method="post" class="row g-3">
  <div class="text-center py-2">
    <h2>Formulario para crear Torneo</h2>
  </div>
  <hr>
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Nombre Campeonato</label>
    <input type="text" name="nombreC" class="form-control" required>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Categoría del campeonato</label>
<select name="categoria" class="form-select" id="" required>
  <option value="">Seleccionar</option>
  <option value="30">+30</option>
  <option value="35">+35</option>
  <option value="40">+40</option>
  <option value="45">+45</option>
  <option value="50">+50</option>
  <option value="55">+55</option>
  <option value="60">+60</option>
</select>

  </div>
  <div class="col-md-2">
    <label for="validationServer01" class="form-label">Fecha Inicio</label>
    <input type="date" name="fecha_ini" class="form-control" >
  </div>
  <div class="col-md-2">
    <label for="validationServer01" class="form-label">Fecha Final</label>
    <input type="date" name="fecha_fin" class="form-control" >
  </div>


    <div class="col-md-3">
    <label for="validationServer01" class="form-label">Fecha de inicio Preinscripción </label>
    <input type="date" name="f_preinsc" class="form-control" >
    
  </div>
  <div class="col-md-3">
    <label for="validationServer01" class="form-label">Fecha Final Preinscripción</label>
    <input type="date" name="f_prefin" class="form-control" >
  </div>

  <div class="col-md-3">
    <label for="validationServer01" class="form-label">Fecha de inicio Inscripción </label>
    <input type="date" name="f_inscrip" class="form-control" >
  </div>
  <div class="col-md-3">
    <label for="validationServer01" class="form-label">Fecha Final Inscripción</label>
    <input type="date" name="f_fin" class="form-control" >
  </div>

<div class="col-md-12">
    <label for="validationServer01" class="form-label">Descripción del Torneo</label>
    <textarea name="descripT" class="form-control" cols="30" rows="5"></textarea>
  </div>

  

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Crear Nuevo Torneo</button>
  </div>
</form>

</div>
    <!--Categoria-->
    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
}else{
  echo "No eres Juez de mesa y no puede estar en esta PAGINA";
  echo "<a href='../index.php'> << REGRESAR </a>";
}

/*
--Datos
<imput type="date" value="2010-03-30" min="2021-01-01" max="2021-12-31" step="6">
------Datos y tiempo
<imput type="datetime-local" value="2010-03-30T10:00">
--Tiempo
<imput type="time" value="14:00:24">
--Captura de una semana
<imput type="week" value="2021-W05">
--month
<imput type="month" value="2021-07">



*/