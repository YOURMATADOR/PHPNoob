<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo ('<p>hola</p>') ?>
    </h1>
    <b><?php echo $_SERVER['HTTP_USER_AGENT'] ?></b>

    <form action="php/hola.php" method="post">
<input type="text" name="nombre" id="nombre">
<hr>
<input type="text" name="edad" id="edad">
<input type="submit" value="">
</form>
</body>
</html>