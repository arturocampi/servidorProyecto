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
            <th>Genero</th>
            <th>Detalles</th>
            <th>Precio</th>
            <th>Tiempo</th>
        </tr>

        <?php foreach ($servicios as $key => $servicio) { ?>
            <tr>
                <td><?= $servicio->name ?></td>
                <td><?= $servicio->gender ?></td>
                <td><?= $servicio->details ?></td>
                <td><?= $servicio->price ?></td>
                <td><?= $servicio->time ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>