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

    <h1>Lista de detalle eventos</h1>
    <table class="table table-striped table-hover">
        <tr>
            <th>Número</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Detalles</th>
            <th>Precio</th>
        </tr>

        <?php foreach ($detalles as $key => $detalle) { ?>
            <tr>
                <td><?= $detalle->line ?></td>
                <td><?= $detalle->name ?></td>
                <td><?= $detalle->quantity ?></td>
                <td><?= $detalle->details ?></td>
                <td><?= $detalle->price ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>