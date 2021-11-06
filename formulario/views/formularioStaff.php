<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Elementos de un formulario</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Gluten:wght@100&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=GlutenBold:wght@900&display=swap');

        body {
            background-color: #03fcad;
            width: 1000px;
            margin: 5px auto;
            text-align: center;
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
    <h3>Formulario sobre empleado@</h3>

    <form method="POST" action="?method=form">

        <!-- nombre/apellidos -->
        <br>
        <label>Nombre</label><input type="text" value="" name="nombre"> <br>
        <label>Apellido</label><input type="text" value="" name="apellido"> <br>
        <!-- edad -->
        <br>
        <label>Edad</label>
        <input type="number" name="edad">
        <br>
        <!-- radio -->
        <br>
        <label>Sexo: </label>
        <input type="radio" name="sexo" value="male" checked> Hombre
        <input type="radio" name="sexo" value="female"> Mujer<br>
        <!-- select -->
        <br>
        <label>Elige el horario: </label>
        <select name="horario">
            <optgroup label="Horarios">
                <option selected>mañanas</option>
                <option>tardes</option>
            </optgroup>
        </select>
        <br><br>
        <input type="submit" value="Enviar"><br><br>
        <a href="?method=logout">Desconectar</a><br><br>
        <a href="?method=mostrarEmpleados">Ver lista de empleados</a>
    </form>
</body>

</html>