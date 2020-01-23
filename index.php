<?php
  include 'PHP/conexion.php';
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontello.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>




    <title>VENTAAUTOS</title>
  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center">
				VENTA DE AUTOS
			</h1>
      <hr>
      <br>
      <form  action="Operaciones.php" class="text-center" method="post">
        <label class="text-center">Nombre del cliente:</label>
        <select name="Clientes" id="clientes">
          <option value="0">Seleccione:</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM tblcliente");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id_Cliente].'">'.$valores[Nombre].'</option>';
          }
        ?>
          </select>
        <br>
        <label class="text-center">Precio De Venta Del Vehículo:</label>
        <input type="text" name="PrecioVehiculo" id="PrecioVehiculo">
        <br>
        <label>Plazos de Venta:</label>
        <select name="Plazos">
          <option value="0">Seleccione:</option>
          <option value="12">12</option>
          <option value="24">24</option>
          <option value="36">36</option>
          <option value="48">48</option>
          </select>
        <br>
        <label>Porcentaje fijo de pago inicial:</label>
        <input type="text" name="Porcentajefijo" id="Porcentajefijo">
        <br>
        <input type="submit" name="generar" id="generar" value="GENERAR">
        <hr>
      </form>
		</div>
	</div>
</div>
  </body>
</html>
