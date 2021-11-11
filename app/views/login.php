<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'GlutenBold';
            src: url('/fonts/Caveat');
        }

        @font-face {
            font-family: 'Gluten';
            src: url('/fonts/Gluten.ttf');
        }

        @font-face {
            font-family: 'Caveat';
            src: url('/fonts/Caveat.ttf');
        }

        body {
            background-color: whitesmoke;
            font-family: 'GlutenBold', cursive;
            font-weight: bold;
        }

        h3 {
            font-family: 'Caveat', cursive;
            font-size: 50px;
        }

        a {
            font-weight: bold;
            color: black;
            font-size: x-large;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <center>
        <h1>Login para gerentes</h1>
        <form method="POST" action="admin/auth">
            <label>Usuario</label><input type="text" value="" name="user"><br>
            <label>Contraseña</label><input type="password" value="" name="password"><br><br>
            <input type="submit" value="enviar"><br><br>
        </form>
        <a href='<?= PATH."/home"?>'>Inicio</a><br><br>
    </center>
</body>

</html>