<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>

    <?php require "app/views/parts/header.php" ?>

    <main role="main" class="container">
        <div class="starter-template">
            <h1>Detalle del servicio <?= $servicio->id ?></h1>
            <ul>
                <li><strong>Nombre: </strong><?= $servicio->name ?></li>
                <li><strong>Genero: </strong><?= $servicio->gender ?></li>
                <li><strong>Detalles: </strong><?= $servicio->details ?></li>
                <li><strong>Precio: </strong><?= $servicio->price ?></li>
                <li><strong>Tiempo: </strong><?= $servicio->time ?></li>
                <li><strong>Emplead@s que los hacen: </strong>
                    <?php
                    $servicesEmployees = $servicio->employee;
                    $arrEmployeeServices = [];
                    foreach ($servicesEmployees as $employee) {
                        array_push($arrEmployeeServices, $employee->id);
                    }
                    foreach ($empleados as $empleado) {
                        if (in_array($empleado->id, $arrEmployeeServices)) {
                            echo '<ol>' . $empleado->name . '&nbsp;' . $empleado
                                ->surname . '</ol>';
                        }
                    }
                    ?>
                </li>
            </ul>
            <form method="post" action="/services" class="mb-5">
                <button type="submit" class="btn btn-danger">Atrás</button>
            </form>
        </div>

    </main>
    <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>