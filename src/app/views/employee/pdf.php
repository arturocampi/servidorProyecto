<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        h1 {
            color: grey;
        }

        table,
        tr,
        td,
        th {
            border: solid 1px black;
            border-collapse: collapse;
        }

        table {
            width: 80%;
        }
    </style>
    <title>Document</title>
</head>

<body>

    <h1>Lista de servicios</h1>
    <table class="table table-striped table-hover">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Detalles</th>
            <th>Fecha de Nacimiento</th>
            <th>Servicios</th>
        </tr>

        <?php foreach ($empleados as $key => $empleado) { ?>
            <?php $servicios = $empleado->service ?>
            <tr>
                <td><?= $empleado->name ?></td>
                <td><?= $empleado->surname ?></td>
                <td><?= $empleado->email ?></td>
                <td><?= $empleado->details ?></td>
                <td><?= $empleado->birthdate->format('Y-m-d') ?></td>
                <td>
                    <?php foreach ($servicios as $key => $servicio) { ?>
                        <?= $servicio->name ?>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>