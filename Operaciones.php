<?php
include 'PHP/conexion.php';
 $valorAuto = $_POST['PrecioVehiculo'];
 $precioAuto= $_POST['PrecioVehiculo'];
 $cliente =  $_POST['Clientes'];
 $PlazoVenta = $_POST['Plazos'];
 $porcentaje = $_POST['Porcentajefijo'];
 //OPERACION
 $ValorInteres = ($porcentaje/100)/$PlazoVenta;
 $m=($valorAuto*$porcentaje*(pow((1+$porcentaje),($PlazoVenta*1))))/((pow((1+$porcentaje),($PlazoVenta*1)))-1);
 ?>

 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Resultados</title>
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="css/fontello.css">


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
       <form class="text_Center" method="post">
         <label  class="text-center">Capital Inicial: <?php echo number_format($valorAuto,2,",",".")?> $ </label>
         <br>
         <label class="text_Center">Cuota a pagar mensualmente: <?php echo number_format($m,2,",",".")?> $ </label>
         <br>
         <table class="table table-striped table-dark" method="post" name="TablaAmortizacion" id="TablaAmortizacion">
     <thead>
       <tr>
         <th class="text_Center" scope="col">ID_Cliente</th>
         <th class="text_Center" scope="col">MES</th>
         <th class="text_Center" scope="col">INTERESES</th>
         <th class="text_Center" scope="col">AMORTIZACION</th>ss
         <th class="text_Center" scope="col">CAPITAL PENDIENTE</th>
       </tr>
     </thead>
     <tbody>
    <?php
    for ($i=1; $i <= $PlazoVenta*1; $i++) {
      echo "<tr>";
      echo "<td align=right>".$cliente."</td>";
				echo "<td align=right>".$i."</td>";
				$totalint=1;
        $totalint=$totalint+($valorAuto*$porcentaje);
				echo "<td align=right>".number_format($valorAuto*$porcentaje,2,",",".")."</td>";
				echo "<td align=right>".number_format($m-($valorAuto*$porcentaje),2,",",".")."</td>";

				$valorAuto=$valorAuto-($m-($valorAuto*$porcentaje));
				if ($valorAuto<0)
				{
					echo "<td align=right>0</td>";
				}else{
					echo "<td align=right>".number_format($valorAuto,2,",",".")."</td>";
				}
			echo "</tr>";
    }
    ?>
     </tbody>
   </table>
   <hr>
   <label class="text_Center">Pago total de intereses : <?php echo number_format($totalint,2,",",".")?> $</label>

       </form>
 		</div>
 	</div>
 </div>

     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/scripts.js"></script>
   </body>
 </html>
 <?php
 //INSERTAR DATOS
 $sql="INSERT INTO tblamortizacion (Precio,Interes,Plazo,id_Cliente) values('$precioAuto','$porcentaje','$PlazoVenta','$cliente')";
 $resultado= mysqli_query($mysqli, $sql);
 if (!$resultado) {
   echo "Error al guardar datos";;
 }else {
   return false;
 }
 mysqli_close($mysqli);
  ?>
