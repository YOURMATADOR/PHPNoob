<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Concurrencia y ciclos</title>
</head>
<body>
    <h1>Ciclos</h1>

    <?php
    $edad = 20;

    if (4 > 5) {
        echo 'hola';
    } else {
        echo 'Adios';
    }

    switch ($edad) {
        case 18:
            echo 'Puedes tomarte unas cheves';
            break;
        case 20:
            echo 'Consigue un trabajo fracasado';
            break;
        default:
            echo 'Hola que tal señora';
            break;
    }

    $contador = 0;
    $sum = 0;
    $pagos = [20, 190, 90];

    while ($contador <= sizeof($pagos)) {
        echo $contador . ". suma: " . $sum . " + " . $pagos[$contador] . '<hr>';
        $sum += $pagos[$contador];
        $contador++;
    }

    foreach ($pagos as $key => $value) {
        echo '<br>' . $key . " " . $value;
    }
    echo '<br>';
    $nombre = 'Eduardo';

    switch ($nombre) {
        case 'Eduardo':
            echo 'Hola lalo';
            break;
        case 'Juan':
            echo 'Hola pancho';
            break;
        default:
            echo 'No se quien eres largate';
            break;
    }

    ?>
</body>
</html>