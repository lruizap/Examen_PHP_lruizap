<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<?

if(!isset($_GET['random'])){
    $random = rand(1, 100);
    $n = 0;
    ?>
    <br><br>
    <form action="Ejercicio02.php" method="get">
      <input type="hidden" name="random" value="<?php echo $random; ?>">
      Valor: <input type="number" name ="n">
      <input type="submit" value="OK">
    </form>
    <?php
  } else {
    $random = $_GET['random'];
    $n = $_GET['n'];

    if($n == ""){
      echo "No se ha escrito ningún elemento o entero positivo";
    } else {
      if($random != $n){
      echo "Te has equivocado";
      if($random > $n ){
        echo " El random es mayor";
      }else {
        echo " El random es menor";
      }
    }else {
      echo "Has acertado";
      echo "¿Quieres voplver a jugar?, para ello pulsa el siguiente enlace";
      ?>
      <br>
        <a href="Ejercicio02.php">>> Volver</a>
      <?php
    };
    }
    
    ?>
    <br><br>
    <form action="Ejercicio02.php" method="get">
      <input type="hidden" name="random" value="<?php echo $random; ?>">
      Valor: <input type="number" name ="n">
      <input type="submit" value="OK">
    </form>
    <?php
  } 

?>

</body>
</html>