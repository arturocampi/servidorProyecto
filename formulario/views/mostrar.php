<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap');

        html {
            background-color: #efa693;
        }

        body {
            padding: 0px;
            margin: 0px;
            width: 1000px;
            margin: 5px auto;
            text-align: center;
            font-family: 'Gluten', cursive;
            font-weight: bold;
        }

        a {
            color: white;
            text-decoration: none;
            font-size: 35px;
        }

        h1 {
            margin: 0px;
            font-family: 'Caveat', cursive;
            /* font-family: 'Shadows Into Light', cursive; */
            /* font-family: 'Dancing Script', cursive; */
            /* font-family: 'Kaushan Script', cursive; */
            /* font-family: 'Gloria Hallelujah', cursive; */
            font-size: 85px;
        }

        p {
            padding-top: 25px;
            font-size: x-large;
        }

        li {
            list-style-type: none;
        }
    </style>
</head>

<body>
    <h1>Datos proporcionados</h1><br><br>
    <?php
    $datos = $_SESSION['datos'];
    foreach ($datos as $key => $value) {
        echo "<li>$key: $value</li>";
    }
    echo '<br><br><li><a href="?method=home">Inicio</a></li>';
    ?>
</body>

</html>