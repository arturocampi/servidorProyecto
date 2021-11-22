<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gluten:wght@200&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap');

        h1 {
            margin: 0px;
            font-family: 'Caveat', cursive;
            font-size: 155px;
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

        .titulo {
            font-size: 33px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <center>
        <form method="POST" action="?method=printEvento">
            <br><br><br><br>
            <label class="titulo">Datos de la empresa</label><br><br>
            <label>Nombre de la empresa</label><br><br>
            <input type="text" name="empresa"><br><br>
            <label>Telefono de la empresa</label><br><br>
            <input type="text" name="telefono"><br><br>
            <label>Email de la empresa</label><br><br>
            <input type="text" name="email"><br><br>
            <label>Fecha de la cita</label><br><br>
            <input type="date" name="fecha"><br><br>
            <label>Tipo de cita</label><br><br>
            <label>Introduce aquí con detalle todos las necesidades del evento</label><br><br>
            <textarea name="informacion" rows="10" cols="50"></textarea><br><br>
            <input type="submit" value="enviar">
            <input type="reset" value="borrar"><br><br>
            <p><a href='/home'>Inicio</a></p>
        </form>
    </center>
</body>

</html>