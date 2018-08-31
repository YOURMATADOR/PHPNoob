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
(function () {
    echo 'gg izi';
})(); //IIFE
function hola($nombre)
{
    echo $nombre . 'Hola que tal';

}
hola('Eduardo');

$global = 10;
$local = 90;


echo '------------> .' . $global . '<br>';

function conversionGlobal()
{
    global $global;
    $global = 500;
}

function conversionLocal()
{

    return $local = 40;

}
conversionGlobal();
echo $global;

echo 'Local ->>>' . $local . conversionLocal() . '<br>';
$miFuncion = function () {
    echo 'funcion variable';
};


$miFuncion();

function suma($a, $b)
{
    return $a + $b;

}
echo 'Suma = ' . suma(10, 10);
?>

<script>
function variable (){
    this.nombre = 'Eduardo';
}
variable.prototype.hola = () => 'Hola';
let persona = new variable();
console.log(persona.hola);
</script>
</body>
</html>