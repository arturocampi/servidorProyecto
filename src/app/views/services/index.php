<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <main role="main" class="container">
        <div class="starter-template">
            <h1>Lista de servicios</h1>
            <p>
                <a href="/services/new" class="btn btn-primary">Nuevo</a>
                <a href="/services/pdf" class="btn btn-success">Pdf</a>
            </p>
            <table class="table table-striped table-hover">
                <tr>
                    <th>Nombre</th>
                    <th>Genero</th>
                    <th>Detalles</th>
                    <th>Precio</th>
                    <th>Tiempo</th>
                    <th>Opciones</th>
                </tr>

                <?php foreach ($servicios as $key => $servicio) { ?>
                    <tr>
                        <td><?php echo $servicio->name ?></td>
                        <td><?php echo $servicio->gender ?></td>
                        <td><?php echo $servicio->details ?></td>
                        <td><?php echo $servicio->price ?></td>
                        <td><?php echo $servicio->time ?></td>
                        <td>
                            <a href="<?= isset($_SESSION['empleado']) ? "/services/edit/" . $servicio->id : "" ?>" class="btn btn-primary">Editar</a>
                            <a href="<?= isset($_SESSION['empleado']) ? "/services/delete/" . $servicio->id : "" ?> " class="btn btn-danger">Borrar</a>
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