<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Gluten:wght@100&display=swap');

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
        }

        h1 {
            margin: 0px;
            font-family: 'Caveat', cursive;
            font-size: 125px;
        }

        #logo {
            width: 300px;
            margin-top: 15px;
        }

        p {
            padding-top: 25px;
            font-size: x-large;
        }

        .titulo {
            font-size: 33px;
            font-weight: bold;
        } */
    </style>
</head>

<body>
    <form action="cliente/addParticular" method="post">
        <br><br><br>
        <label class="titulo">Datos del cliente</label><br><br>
        <label>Nombre completo</label><br>
        <input type="text" name="nombre"><br><br>
        <input type="text" name="apellidos"><br><br>
        <label>Telefono del cliente</label><br><br>
        <input type="text" name="telefono"><br><br>
        <label>Email del cliente</label><br><br>
        <input type="text" name="email"><br><br><br>
        <label class="titulo">Datos sobre la cita</label><br><br>
        <label>Fecha de la cita</label><br><br>
        <input type="date" name="fecha"><br><br>
        <label>Sexo</label><br><br>
        <select name="sexo"><br><br>
            <option value="mujer" selected>Mujer</option>
            <option value="hombre">Hombre</option>
        </select><br><br>
        <label>Que tipo de peinado quieres</label><br><br>
        <input type="text" name="peinado"><br><br>
        <input type="submit" value="enviar">
        <input type="reset" value="borrar">
    </form>
</body>

</html>