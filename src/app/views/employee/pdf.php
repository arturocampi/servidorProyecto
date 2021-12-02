<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        h1 {
            color: red;
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
        </tr>

        <?php foreach ($empleados as $key => $empleado) { ?>
            <tr>
                <td><?php echo $empleado->name ?></td>
                <td><?php echo $empleado->surname ?></td>
                <td><?php echo $empleado->email ?></td>
                <td><?php echo $empleado->details ?></td>
                <td><?php echo $empleado->birthdate ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>