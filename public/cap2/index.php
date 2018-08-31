<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>
    <h1>arreglos</h1>
    <?php
    $arreglo = [1, 2, 3, 4];
    $arregloDos = array(2, 3, 4, 5, 6);
    print_r($arreglo);
    print('Hola');
    print_r($arregloDos);
    $arregloDos['nombre'] = 10;
    echo $arregloDos['nombre'] . 'mi nombre';

    $miObjeto->nombre = "Eduardo";
    $miObjeto->edad = 20;

    echo json_encode($miObjeto);
    $miNombre = json_encode($miObjeto);
   
    ?>
</body>
</html>