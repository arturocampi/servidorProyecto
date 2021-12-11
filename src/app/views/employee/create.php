<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <main role="main" class="container">
        <div class="starter-template">
            <h1>Alta de empleado</h1>
            <form method="post" action="/employee/new">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Apellidos</label>
                    <input type="text" name="surname" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Detalles</label>
                    <input type="text" name="details" class="form-control">
                </div>
                <div class="form-group">
                    <label>Fecha de nacimiento</label>
                    <input type="text" name="birthdate" class="form-control">
                </div>
                <label>Servicios</label>
                <div class="form-check">
                    <?php
                    foreach ($servicios as $key => $service) { ?>
                        <input class="form-check-input" name="servicesid[]" type="checkbox" value="<?= $service->id ?>" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault"><?= $service->name ?></label><br>
                    <?php
                    }
                    ?>
                </div><br>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
        </div>
    </main><!-- /.container -->
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>