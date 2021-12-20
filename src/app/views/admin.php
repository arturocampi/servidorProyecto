<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php require "app/views/parts/head.php" ?>
</head>

<body style="background-color: #efa693;">
    <?php require "app/views/parts/header.php" ?>
    <main role="main" class="container">
        <div class="starter-template">
            <h1>Acceso Empleado</h1>
            <div class="alert alert-primary">
                Acceso a modificación y creación de eventos
            </div>
            <div class="alert alert-primary">
                Acceso a modificación y creación de detalles de evento
            </div>
            <div class="alert alert-primary">
                Acceso a modificación y creación de empleados
            </div>
            <div class="alert alert-primary">
                Acceso a modificación y creación de servicios
            </div>
        </div>
    </main>
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>