<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $empleados =  [];
    $empleados = $_SESSION['empleados'];
    // foreach ($empleados as $key => $value) {
    //     echo "<li>$key: $value</li>";
    // }
    foreach ($empleados as $codigo => $nombre) {
        echo "Código: $codigo Nombre: $nombre <br>";
    }
    echo '<li><a href="?method=home">Inicio</a></li>';
    ?>
</body>

</html>