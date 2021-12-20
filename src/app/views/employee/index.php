<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <main role="main" class="container">
        <div class="starter-template">
            <h1>Lista de empleados</h1>
            <p>
                <a href="/employee/create" class="btn btn-primary">Nuevo</a>
                <a href="/employee/pdf" class="btn btn-success">Pdf</a>
                <a href="/home/admin" class="btn btn-danger">Atrás</a>
            </p>
            <table class="table table-striped table-hover">
            <thead class="thead-dark bg-dark text-white">
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Detalles</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Sercicios</th>
                    <th>Opciones</th>
                </tr>
            </thead>
                <?php foreach ($empleados as $key => $empleado) { ?>
                    <?php $servicios = $empleado->service ?>
                    <tr>
                        <td><?= $empleado->name ?></td>
                        <td><?= $empleado->surname ?></td>
                        <td><?= $empleado->email ?></td>
                        <td><?= $empleado->details ?></td>
                        <td><?= $empleado->birthdate  ? $empleado->birthdate->format('Y-m-d') : 'nonato' ?></td>
                        <td>
                            <?php foreach ($servicios as $key => $servicio) { ?>
                                <?= $servicio->name . "<br>" ?>
                            <?php } ?>
                        </td>
                        <td>
                            <a href="<?= isset($_SESSION['empleado']) ? "/employee/show/" . $empleado->id : "" ?> " class="btn btn-warning">Ver</a>
                            <a href="<?= isset($_SESSION['empleado']) ? "/employee/edit/" . $empleado->id : "" ?> " class="btn btn-primary">Editar</a>
                            <a href="<?= isset($_SESSION['empleado']) ? "/employee/delete/" . $empleado->id : "" ?> " class="btn btn-danger">Borrar</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </main><!-- /.container -->
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>