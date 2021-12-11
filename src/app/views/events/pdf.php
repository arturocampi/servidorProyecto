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

    <h1>Lista de eventos</h1>
    <table class="table table-striped table-hover">
        <tr>
            <th>Nombre</th>
            <th>Cliente</th>
            <th>Detalles</th>
            <th>Fecha</th>
        </tr>

        <?php foreach ($eventos as $key => $evento) { ?>
            <tr>
                <td><?= $evento->name ?></td>
                <td><?= $evento->client ?></td>
                <td><?= $evento->details ?></td>
                <td><?= $evento->start_date ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>