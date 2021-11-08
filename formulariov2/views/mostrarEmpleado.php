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
    $reflection = new ReflectionClass('Empleado');
    $instance = $reflection->newInstanceWithoutConstructor();
    $instance->__toString();

    foreach ($instance as $key => $value) {
        echo "{$key} : {$value}";
    }

    echo '<pre>';
    var_dump($_SESSION['empleados']);
    echo '</pre>';

    echo "<li><a href='?method=formularioStaff'>Añadir otro empleado</a></li>";
    echo "<li><a href='?method=destroySession'>Borrar empleados</a></li>";
    echo "<li><a href='?method=home'>Inicio</a></li>";
    ?>
</body>

</html>