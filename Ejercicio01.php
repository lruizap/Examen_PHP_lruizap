<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

  <h1>Ejercicio01</h1>
  <p>
    Debes crear un programa que indique el número de veces que aparece una fruta en una colección de frutas.
  </p>

<?php

    $arrayFrutas = array();
    echo "<p style='font-size:30px'>Las frutas son: ";
    for ($i = 0; $i < rand(7,20); $i++) {
        array_push($arrayFrutas,"&#".rand(127815, 127827));
        echo $arrayFrutas[$i]." ";
    }

    echo "<h1>Resultado</h1>";
    $contador = 0;
    $numeroFrutas = 0;
    $arrayFrutasRecorridas = array();
    while($contador < count($arrayFrutas)){
      for ($i=0; $i < count($arrayFrutas); $i++) {
            
            if(in_array($arrayFrutas[$i], $arrayFrutasRecorridas)){
              $i++;
              $numeroFrutas = 0;
              $contador++;
              continue;
            }

          for ($j=0; $j < count($arrayFrutas); $j++) { 
            if($arrayFrutas[$i] == $arrayFrutas[$j]){
              $numeroFrutas++;
            }
            array_push($arrayFrutasRecorridas, $arrayFrutas[$i]);
          }

          echo "<p style='font-size:30px'>La fruta ".$arrayFrutas[$i]." está un total de ".$numeroFrutas;
          if($numeroFrutas > 1){
            echo " veces </p>";
          }elseif($numeroFrutas == 1){
            echo " vez </p>";
          }

        $numeroFrutas = 0;
        $contador++;

      }
    }



?>

</body>
</html>