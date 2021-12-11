<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <main role="main" class="container">
        <div class="starter-template">
            <h1>Edición de servicio</h1>
            <form method="post" action="/services/update">
                <input type="hidden" name="id" value="<?php echo $servicio->id ?>">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $servicio->name ?>">
                </div>
                <div class="form-group">
                    <label for="genero">Genero</label>
                    <select class="custom-select" name="gender">
                        <option value="mujer" <?= $servicio->gender == 'mujer' ? 'selected' : ''; ?>>mujer</option>
                        <option value="hombre" <?= $servicio->gender == 'hombre' ? 'selected' : ''; ?>>hombre</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Detalles</label>
                    <input type="text" name="details" class="form-control" value="<?php echo $servicio->details ?>">
                </div>
                <div class="form-group">
                    <label>Precio</label>
                    <input type="number" name="price" class="form-control" value="<?php echo $servicio->price ?>">
                </div>
                <div class="form-group">
                    <label>Tiempo</label>
                    <input type="number" name="time" class="form-control" value="<?php echo $servicio->time ?>">
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
                <a href="/services" class="btn btn-danger">Atrás</a>
            </form>
        </div>
    </main><!-- /.container -->
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>