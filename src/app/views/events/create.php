<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <main role="main" class="container">
        <div class="starter-template">
            <h1>Alta de evento</h1>
            <form method="post" action="/evento/new">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Cliente</label>
                    <input type="text" name="client" class="form-control">
                </div>
                <div class="form-group">
                    <label>Detalles</label>
                    <input type="text" name="details" class="form-control">
                </div>
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" name="start_date" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
        </div>
    </main><!-- /.container -->
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>