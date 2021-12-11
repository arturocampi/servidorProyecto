<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <main role="main" class="container">
        <div class="starter-template">
            <h1>Lista de detalles de evento</h1>
            <p>
                <a href="<?= "/detalle/create/" . $id ?>" class="btn btn-primary">Nuevo</a>
                <a href="<?= "/detalle/pdf/" . $id ?>" class="btn btn-success">Pdf</a>
                <a href="/evento/" class="btn btn-danger">Atrás</a>
            </p>
            <table class="table table-striped table-hover">
                <tr>
                    <th>Número</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Detalles</th>
                    <th>Precio</th>
                    <th>Opciones</th>
                </tr>


                <?php foreach ($detalles as $key => $detalle) { ?>
                    <tr>
                        <td><?php echo $detalle->line ?></td>
                        <td><?php echo $detalle->name ?></td>
                        <td><?php echo $detalle->quantity ?></td>
                        <td><?php echo $detalle->details ?></td>
                        <td><?php echo $detalle->price ?></td>
                        <td>
                            <a href="<?= isset($_SESSION['empleado']) ? "/detalle/edit/" . $detalle->line : "" ?>" class="btn btn-warning">Editar</a>
                            <a href="<?= isset($_SESSION['empleado']) ? "/detalle/delete/" . $detalle->line : "" ?> " class="btn btn-danger">Borrar</a>
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