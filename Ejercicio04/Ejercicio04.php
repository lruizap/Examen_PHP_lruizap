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
$ncartas = $_GET['nc']; #Valor que le pasamos desde el formulario
$tipocartas = $_GET['cartas']; # Valor que le pasamos desde el formulario

$cartaAnterior = "";
$hayConsecutivas = False;

for ($i=1;$i<=$ncartas;$i++){
    $numerocarta = rand(1,10);
    $carta = $tipocartas.$numerocarta.".svg";
    $hayConsecutivas = $hayConsecutivas || $carta == $cartaAnterior;
    $cartaAnterior = $carta;
    echo $carta;
    echo  "<img src=img/".$carta."/>";
}

if($hayConsecutivas){
    echo 'Hay cartas consecutivas repetidas';
}

?>

</body>
</html>