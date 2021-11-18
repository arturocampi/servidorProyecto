<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gluten:wght@200&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap');

        h1 {
            margin: 50px;
            font-family: 'Caveat', cursive;
            font-size: 100px;
        }

        body {
            padding: 0px;
            margin: 0px;
            text-align: center;
            font-family: 'Gluten', cursive;
            font-weight: bold;
            background: rgb(238, 174, 202);
            background: linear-gradient(90deg, rgba(238, 174, 202, 1) 0%, rgba(239, 166, 147, 1) 30%, rgba(239, 166, 147, 1) 70%, rgba(238, 174, 202, 1) 100%);
        }

        a {
            color: white;
            text-decoration: none;
        }

        p {
            padding-top: 25px;
            font-size: x-large;
        }

        #logo {
            width: 300px;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <center>
        <h1>Login para gerentes</h1>
        <form method="POST" action="/admin/auth">
            <label>Usuario</label><input type="text" value="" name="user"><br>
            <label>Contraseña</label><input type="password" value="" name="password"><br><br>
            <input type="submit" value="enviar"><br><br>
        </form>
        <p><a href='/home'>Inicio</a></p>
    </center>
</body>

</html>