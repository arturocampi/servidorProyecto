<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Elementos de un formulario</title>
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
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);
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
        <!-- telefono -->
        <br>
        <label>Telefono</label><input type="number" value="" name="telefono"> <br>
        <!-- edad -->
        <br>
        <label>Edad</label>
        <input type="number" name="edad">
        <br>
        <!-- radio -->
        <br>
        <label>Sexo: </label>
        <input type="radio" name="sexo" value="hombre" checked> Hombre
        <input type="radio" name="sexo" value="mujer"> Mujer<br>
        <!-- select -->
        <br>
        <label>Elige el horario: </label>
        <select name="horario">
            <optgroup label="Horarios">
                <option selected>mañanas</option>
                <option>tardes</option>
            </optgroup>
        </select>
        <!-- sueldo -->
        <br>
        <label>Sueldo</label>
        <input type="number" name="sueldo">
        <br>
        <!-- enviar -->
        <br><br>
        <input type="submit" value="Enviar"><br><br>
        <a href="?method=logout">Desconectar</a><br><br>
        <a href="?method=mostrarEmpleados">Ver lista de empleados</a>
    </form>
</body>

</html>