<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php 
$arreglo = [20, 90, 100, 90];


array_map(function ($i) {
    echo 'Edad = ' . $i . '<br>';
}, $arreglo);

$palabra = 'Hola nigga';
$palabra = strtoupper($palabra);
echo $palabra;

$random = rand(1, 20);

echo $random;
?>
</body>
</html>