<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <main role="main" class="container">
        <div class="starter-template">
            <h1>Alta de detalles de evento</h1>
            <form method="post" action="/detalle/new">
                <input type="hidden" name="id" value="<?= $id ?>">
                <div class="form-group">
                    <label>Número</label>
                    <input type="number" name="line" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="text" name="quantity" class="form-control">
                </div>
                <div class="form-group">
                    <label>Detalles</label>
                    <input type="text" name="details" class="form-control">
                </div>
                <div class="form-group">
                    <label>Precio</label>
                    <input type="number" name="price" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
        </div>
    </main><!-- /.container -->
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>