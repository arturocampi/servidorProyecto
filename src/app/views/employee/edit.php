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
                <input type="hidden" name="id" value="<?= $empleado->id ?>">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" value="<?= $empleado->name ?>">
                </div>
                <div class="form-group">
                    <label>Apellidos</label>
                    <input type="text" name="surname" class="form-control" value="<?= $empleado->surname ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?= $empleado->email ?>">
                </div>
                <div class="form-group">
                    <label>Detalles</label>
                    <input type="text" name="details" class="form-control" value="<?= $empleado->details ?>">
                </div>
                <div class="form-group">
                    <label>Fecha de nacimiento</label>
                    <input type="text" name="birthdate" class="form-control" value="<?= $empleado->birthdate->format('Y-m-d') ?>">
                </div>
                <label>Servicios</label>
                <div class="form-check">
                    <?php
                    $serviciosEmployee = [];
                    $empServices = $empleado->service;
                    foreach ($empServices as $key => $empService) {
                        $serviciosEmployee[] = $empService->service_id;
                    }
                    foreach ($servicios as $key => $service) {
                        if (in_array($service->id, $serviciosEmployee)) { ?>
                            <input class="form-check-input" name="servicesid[]" type="checkbox" value="<?= $service->id ?>" checked>
                            <label class="form-check-label"><?= $service->name ?></label><br>
                        <?php
                        } else { ?>
                            <input class="form-check-input" name="servicesid[]" type="checkbox" value="<?= $service->id ?>">
                            <label class="form-check-label"><?= $service->name ?></label><br>
                        <?php
                        }
                        ?>
                    <?php
                    }
                    ?>
                </div><br>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
                <a href="/employee" class="btn btn-danger">Atrás</a>
            </form>
        </div>
    </main><!-- /.container -->
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>