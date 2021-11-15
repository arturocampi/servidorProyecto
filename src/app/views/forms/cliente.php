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
            <select name="peinado"><br><br>
                <option value="corte_pelo_corto" selected>Corte en pelo corto (6€)</option>
                <option value="corte_media_melena">Corte en media melena (8€)</option>
                <option value="corte_pelo_largo">Corte en pelo largo (10€)</option>
                <option value="tinte_pelo_corto">Tinte en pelo corto y medio (15€)</option>
                <option value="tinte_pelo_largo">Tinte en pelo largo (18€)</option>
                <option value="tinte_descoloracion_pelo_corto">Tinte + decoloración en pelo corto y medio (20€)</option>
                <option value="tinte_descoloracion_pelo_largo">Tinte + decoloración en pelo largo (23€)</option>
                <option value="reflejos_pelo_corto_medio">Reflejos pelo corto y medio (15€)</option>
                <option value="reflejos_pelo_largo">Reflejos pelo largo (18€)</option>
                <option value="mechas_pelo_corto_medio">Mechas pelo corto y medio (plata, gorro o peine) (20€)</option>
                <option value="mechas_pelo_corto_largo">Mechas pelo largo (plata, gorro o peine) (23€)</option>
                <option value="tinte_mechas_pelo_corto_medio">Tinte + mechas pelo corto y medio (30€)</option>
                <option value="tinte_mechas_pelo_largo">Tinte + mechas pelo largo (33€)</option>
                <option value="permanente_pelo_corto">Permanente rizada o lisa en pelo corto y medio (20€)</option>
                <option value="permanente_pelo_largo">Permanente rizada o lisa en pelo largo (23€)</option>
                <option value="balayage_pelo_corto">Balayage en pelo corto y medio (25€)</option>
                <option value="balayage_pelo_largo">Balayage en pelo largo (30€)</option>
                <option value="lavado">Lavado (5€)</option>
                <option value="peinado_final">Peinado final (5€)</option>
                <option value="hidratacion_pelo_corto">Hidratación/Reestructuración pelo corto y medio (10€)</option>
                <option value="hidratacion_pelo_largo">Hidratación/Reestructuración en pelo largo (13€)</option>
                <option value="semirecogido_pelo_corto">Semi-recogido en pelo corto o medio (DESDE 10€)</option>
                <option value="semirecogido_pelo_largo">Semi-recogido en pelo largo (DESDE 13€)</option>
                <option value="recodigo_pelo_corto">Recogido en pelo corto y medio (DESDE 13€)</option>
                <option value="recogido_pelo_largo">Recogido en pelo largo (DESDE 18€)</option>
            </select><br><br>
            <input type="submit" value="enviar">
            <input type="reset" value="borrar"><br><br>
            <p><a href='/home'>Inicio</a></p>
        </form>
    </center>
</body>

</html>