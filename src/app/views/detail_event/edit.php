<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <main role="main" class="container">
        <div class="starter-template">
            <h1>Edición de detalle de evento</h1>
            <form method="post" action="/detalle/update">
                <input type="hidden" name="id" value="<?php echo $detalle->event_id ?>">
                <input type="hidden" name="line" value="<?php echo $detalle->line ?>">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $detalle->name ?>">
                </div>
                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="text" name="quantity" class="form-control" value="<?php echo $detalle->quantity ?>">
                </div>
                <div class="form-group">
                    <label>Detalles</label>
                    <input type="text" name="details" class="form-control" value="<?php echo $detalle->details ?>">
                </div>
                <div class="form-group">
                    <label>Precio</label>
                    <input type="number" name="price" class="form-control" value="<?php echo $detalle->price ?>">
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
                <a href="<?= "/detalle/index/" . $detalle->event_id ?>" class="btn btn-danger">Atrás</a>
            </form>
        </div>
    </main><!-- /.container -->
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>