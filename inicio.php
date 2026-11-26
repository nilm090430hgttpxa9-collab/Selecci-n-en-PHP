<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$destinos    = isset($_POST['destinos'])    ? $_POST['destinos']    : [];
$actividades = isset($_POST['actividades']) ? $_POST['actividades'] : [];
$servicios   = isset($_POST['servicios'])   ? $_POST['servicios']   : [];

$Destinos    = count($destinos);
$Actividades = count($actividades);
$Servicios   = count($servicios);
$General     = $Destinos + $Actividades + $Servicios;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Total de el Paquete</h1>

    <h2>Cliente</h2>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Correo: <?php echo $correo; ?></p>

    <h2>Destinos seleccionados</h2>
    <?php if ($Destinos == 0) { ?>
        <p>No seleccionaste ningún elemento</p>
    <?php } else { ?>
        <ul>
            <?php foreach ($destinos as $d) { echo "<li>$d</li>"; } ?>
        </ul>
    <?php } ?>
    <p>Total: <?php echo $Destinos; ?></p>

    <h2>Actividades seleccionadas</h2>
    <?php if ($Actividades == 0) { ?>
        <p>No seleccionaste ningún elemento</p>
    <?php } else { ?>
        <ul>
            <?php foreach ($actividades as $a) { echo "<li>$a</li>"; } ?>
        </ul>
    <?php } ?>
    <p>Total: <?php echo $Actividades; ?></p>

    <h2>Servicios adicionales seleccionados</h2>
    <?php if ($Servicios == 0) { ?>
        <p>No seleccionaste ningún elemento</p>
    <?php } else { ?>
        <ul>
            <?php foreach ($servicios as $s) { echo "<li>$s</li>"; } ?>
        </ul>
    <?php } ?>
    <p>Total: <?php echo $Servicios; ?></p>

    <h2>Total general</h2>
    <p>Elementos seleccionados: <?php echo $General; ?></p>
</body>
</html>
