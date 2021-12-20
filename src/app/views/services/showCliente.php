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
                <a href="/services/pdf" class="btn btn-success">Pdf</a>
                <a href="/home" class="btn btn-danger">Atrás</a>
            </p>
            <table class="table table-striped table-hover">
            <thead class="thead-dark bg-dark text-white">
                <tr>
                    <th>Nombre</th>
                    <th>Genero</th>
                    <th>Detalles</th>
                    <th>Precio</th>
                    <th>Tiempo</th>
                </tr>
            </thead>
                <?php foreach ($servicios as $key => $servicio) { ?>
                    <tr>
                        <td><?php echo $servicio->name ?></td>
                        <td><?php echo $servicio->gender ?></td>
                        <td><?php echo $servicio->details ?></td>
                        <td><?php echo $servicio->price ?></td>
                        <td><?php echo $servicio->time ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </main><!-- /.container -->
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>