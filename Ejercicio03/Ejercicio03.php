<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="./examen.css">
</head>
<body>

<?php
  $r1 = rand(0,5);
  $r2 = rand(0,5);
  echo "<table>";
  echo "<tr>";
    echo "<td><h1>PARES Y NONES</h1></td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td><h2>JUGADOR 1</h2></td>";
    echo "<td><h2>JUGADOR 2</h2></td>";
  echo "</tr>";
  echo "</table>";

  if(($r1 + $r2) % 2 == 0 ){
    echo "<p>HA GANADO EL JUGADOR 1</p>";
    ?>
    <tr>
      <td><img src="img/gana.svg" alt="Gana" height="100"></td>
      <?php 
      
      echo '<td><img src=./img/'.$r1.'.svg></td>';
      echo '<td><img src=./img/'.$r2.'.svg></td>';
      
      ?>
      <td><img src="img/pierde.svg" alt="Pierde" height="100"></td>
    </tr>
    <?php
  }else {
    echo "<p>HA GANADO EL JUGADOR 2</p>";
        ?>
    <tr>
      <td><img src="img/pierde.svg" alt="Pierde" height="100"></td>
      <?php 
      
      echo '<td><img src=./img/'.$r1.'.svg></td>';
      echo '<td><img src=./img/'.$r2.'.svg></td>';
      
      ?>
      <td><img src="img/gana.svg" alt="Gana" height="100"></td>
    </tr>
    <?php
  }

?>

  <br><br><br><br><br><br>
  <p>¿Quieres volver a jugar?</p>
  <a href="Ejercicio03.php">>> Volver</a>

</body>
</html>