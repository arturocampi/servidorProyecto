<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <main role="main" class="container">
        <div class="starter-template">
            <h1>Lista de eventos</h1>
            <p>
                <a href="/evento/create" class="btn btn-primary">Nuevo</a>
                <a href="/evento/pdf" class="btn btn-success">Pdf</a>
                <a href="/home/admin" class="btn btn-danger">Atrás</a>
            </p>
            <table class="table table-striped table-hover">
                <tr>
                    <th>Nombre</th>
                    <th>Cliente</th>
                    <th>Detalles</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </tr>

                <?php foreach ($eventos as $key => $evento) { ?>
                    <tr>
                        <td><?php echo $evento->name ?></td>
                        <td><?php echo $evento->client ?></td>
                        <td><?php echo $evento->details ?></td>
                        <td><?php echo $evento->start_date ?></td>
                        <td>
                            <a href="<?= isset($_SESSION['empleado']) ? "/detalle/index/" . $evento->id : "" ?>" class="btn btn-warning">Ver</a>
                            <a href="<?= isset($_SESSION['empleado']) ? "/evento/edit/" . $evento->id : "" ?>" class="btn btn-primary">Editar</a>
                            <a href="<?= isset($_SESSION['empleado']) ? "/evento/delete/" . $evento->id : "" ?> " class="btn btn-danger">Borrar</a>
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