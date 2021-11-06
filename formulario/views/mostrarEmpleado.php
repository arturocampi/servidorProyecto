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
    // mostrar array
    if (count($_SESSION['empleados'])) {
        foreach ($_SESSION['empleados'] as $key => $value) {
            echo "<li>$key: $value</li>";
        }
    }
    echo '<li><a href="?method=home">Inicio</a></li>';
    ?>
</body>

</html>