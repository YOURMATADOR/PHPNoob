<?php
// comentario

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

if (+$edad <= 18) {
    ?>
<script>
    alert(`Hola que tal <?php echo $nombre ?>`);
</script>
<?php


} else {
    echo sumarAnios($edad);
}

function sumarAnios($edad)
{
    return $edad + 10;
}
?>