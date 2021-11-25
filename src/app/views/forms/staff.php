<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Elementos de un formulario</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gluten:wght@200&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap');

        h3 {
            margin: 50px;
            font-family: 'Caveat', cursive;
            font-size: 55px;
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
            margin: 55px;
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
        <h3>Formulario sobre empleado@</h3>

        <form method="POST" action="empleado/create">

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
            </select> <br>
            <!-- sueldo -->
            <br>
            <label>Sueldo</label>
            <input type="number" name="sueldo">
            <br>
            <!-- enviar -->
            <br><br>
            <input type="submit" value="Enviar">
            <p><a href="/admin/mostrar">Ver lista de empleados</a></p>
            <p><a href='/home'>Inicio</a></p>
        </form>
    </center>
</body>

</html>