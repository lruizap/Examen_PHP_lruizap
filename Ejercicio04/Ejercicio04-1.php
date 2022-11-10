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

  if(!isset($_GET['nc'])){

    $nc = 0;
    $palo = "";

    ?>

          <br><br>
    <form action="Ejercicio04.php" method="get">
      Valor carta: <input type="number" name ="nc" autofocus="" required=""><br>
      Valor palo:<select name="cartas">
        <option value="a">palos</option>
        <option value="b">espadas</option>
        <option value="c">bastos</option>
        <option value="d">copas</option>
      </select>
      <input type="submit" value="OK">
    </form>

    <?php }?>

?>

</body>
</html>