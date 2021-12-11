<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>

    <?php require "app/views/parts/header.php" ?>

    <main role="main" class="container">
        <div class="starter-template">
            <h1>Detalle del empleado <?= $empleado->id ?></h1>
            <ul>
                <li><strong>Nombre: </strong><?= $empleado->name ?></li>
                <li><strong>Apellidos: </strong><?= $empleado->surname ?></li>
                <li><strong>Email: </strong><?= $empleado->email ?></li>
                <li><strong>F. nacimiento: </strong><?= $empleado->birthdate->format('d-m-Y') ?></li>
                <li><strong>Servicios: </strong>
                    <?php
                    $employeeServices = $empleado->service;
                    $arrEmpServices = [];
                    foreach ($employeeServices as $employeeService) {
                        array_push($arrEmpServices, $employeeService->id);
                    }
                    foreach ($servicios as $key => $servicio) {
                        if (in_array($servicio->id, $arrEmpServices)) {
                            echo '<ol>' . $servicio->name  . '</ol>';
                        }
                    }
                    ?>
                </li>
            </ul>
            <form method="post" action="/employee" class="mb-5">
                <button type="submit" class="btn btn-danger">Atrás</button>
            </form>
        </div>

    </main>
    <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>