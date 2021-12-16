<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .center {
            display: flex;
            justify-content: center;
        }

        .image{
            width: 50%;
            height: 50%;
        }
    </style>
    <?php require "app/views/parts/head.php" ?>
</head>

<body style="background-color: #efa693;">
    <?php require "app/views/parts/header.php" ?>
    <div class="center">
        <img src="assets/img/logo.png" class="image">
    </div>
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>