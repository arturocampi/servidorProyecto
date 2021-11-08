<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li {
            list-style-type: none;
        }
    </style>
</head>

<body>
    <?php
    if (isset($printEmp)) {
        $printEmp = $_SESSION['empleados'];
    } else {
        $printEmp =  [];
        $printEmp = $_SESSION['empleados'];
    }
    $index = 1;
    foreach ($printEmp as $value) {
        echo "Empleado {$index}: <br>{$value}";
        $index++;
    }
    echo "<br>{$printEmp}";
    echo "<br><br><li><a href='?method=formularioStaff'>Añadir otro empleado</a></li>";
    echo "<br><br><li><a href='?method=home'>Inicio</a></li>";
    ?>
</body>

</html>