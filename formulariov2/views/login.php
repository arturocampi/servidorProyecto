<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Gluten:wght@100&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=GlutenBold:wght@900&display=swap');

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
            color: white;
            font-size: x-large;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <center>
        <h1>Login para gerentes</h1>
        <form method="POST" action="?method=auth">
            <label>Usuario</label><input type="text" value="" name="user"><br>
            <label>Contraseña</label><input type="password" value="" name="password"><br><br>
            <input type="submit" value="enviar">
        </form>
    </center>
</body>

</html>