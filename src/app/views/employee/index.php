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
                <a href="/employee/pdf" class="btn btn-primary">Pdf</a>
            </p>
            <table class="table table-striped table-hover">
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Detalles</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Sercicios</th>
                    <th>Opciones</th>
                </tr>
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
                                <?= $servicio->name ?>
                            <?php } ?>
                        </td>
                        <td>
                            <a href="<?= isset($_SESSION['user']) ? "/employee/edit/" . $empleado->id : "/employee/edit/" . $empleado->id ?>" class="btn btn-primary">
                                <?= isset($_SESSION['user']) ? "Editar" : "Editar" ?></a>
                            <a href="<?= isset($_SESSION['user']) ? "/employee/delete/" . $empleado->id : "/employee/delete/" . $empleado->id ?>" class="btn btn-danger">
                                <?= isset($_SESSION['user']) ? "Borrar" : "Borrar" ?></a>
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