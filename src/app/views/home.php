<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELLISIMA</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');

        .center {
            display: flex;
            justify-content: space-between;
        }

        .image {
            width: 25%;
            height: 25%;
        }
        .div1{
            background-color: whitesmoke;
        }
        #mapa{
            
            padding: 10px;
        }

        .div1 p{
            width: 400px;
            padding: 5px;
        }
    </style>
    <?php require "app/views/parts/head.php" ?>
</head>

<body style="background-color: #efa693;">
    <?php require "app/views/parts/header.php" ?>
    <div class="center">
        <div class="div1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5959.828724427774!2d-0.966598!3d41.6791929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd596c0c09564b63%3A0x811b8fcb192ba0a8!2sClub%20Papiro%20Zaragoza!5e0!3m2!1ses!2ses!4v1639676045568!5m2!1ses!2ses" width="500" height="400" allowfullscreen="" loading="lazy" id="mapa"></iframe>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, nostrum?

                </p>
        </div>
        <img src="assets/img/logo.png" class="image">
    </div>
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>