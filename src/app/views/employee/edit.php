<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <main role="main" class="container">
        <div class="starter-template">
            <h1>Edición de empleado</h1>
            <form method="post" action="/employee/update" class="mb-5">
                <input type="hidden" name="id" value="<?php echo $empleado->id ?>">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $empleado->name ?>">
                </div>
                <div class="form-group">
                    <label>Apellidos</label>
                    <input type="text" name="surname" class="form-control" value="<?php echo $empleado->surname ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $empleado->email ?>">
                </div>
                <div class="form-group">
                    <label>Detalles</label>
                    <input type="text" name="details" class="form-control" value="<?php echo $empleado->details ?>">
                </div>
                <div class="form-group">
                    <label>Fecha de nacimiento</label>
                    <input type="text" name="birthdate" class="form-control" value="<?php echo $empleado->birthdate->format('Y-m-d') ?>">
                </div>
                <label>Servicios</label>
                <div class="form-check">
                    <?php
                    foreach ($servicios as $key => $service) {
                        if ($empleado->id == $service->id) {
                            $selected = $empleado->id == $service->id ? 'checked' : ''; ?>
                            <input class="form-check-input" name="service[]" type="checkbox" value="<?php echo $service->name ?>" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault"><?php echo $service->name ?></label><br>
                        <?php
                        } else {
                        ?>
                            <input class="form-check-input" name="service[]" type="checkbox" value="<?php echo $service->name ?>" id="flexCheckChecked" <?= $selected ?>>
                            <label class="form-check-label" for="flexCheckChecked"><?php echo $service->name ?></label><br>
                    <?php
                        }
                    } ?>
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