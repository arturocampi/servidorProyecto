<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark mb-5">
    <a class="navbar-brand ms-3" href="<?= isset($_SESSION['empleado']) ? "/home/admin" : "/home" ?>">BELLISIMA</a>
    <nav class="navbar navbar-light bg-transparent" id="nav">
      <div class="d-flex justify-content-center">
        <div class="">
          <form class="container-fluid justify-content-start" method="post" action="<?= isset($_SESSION['empleado']) ? "/evento" : "/evento/create" ?>">
            <button class="btn btn-outline-light me-2" type="submit">CITAS EVENTOS</button>
          </form>
        </div>
        <div class="">
          <form class="container-fluid justify-content-start" method="post" action="<?= isset($_SESSION['empleado']) ? "/employee" : "/employee/showCliente" ?>">
            <button class="btn btn-outline-light me-2" type="submit">NUESTROS EMPLEADOS</button>
          </form>
        </div>
        <div class="">
          <form class="container-fluid justify-content-start" method="post" action="<?= isset($_SESSION['empleado']) ? "/services" : "/services/showCliente" ?>">
            <button class="btn btn-outline-light me-2" type="submit">NUESTRO SERVICIOS</button>
          </form>
        </div>
      </div>
    </nav>
    <div>
      <form class="container-fluid justify-content-start" method="post" action="<?= isset($_SESSION['empleado']) ? "/login/logout" : "/login" ?>">
        <button class="btn btn-sm btn-outline-danger" type="submit">
          <?= isset($_SESSION['empleado']) ? "LOGOUT" : "LOGIN" ?>
        </button>
      </form>
    </div>
  </nav>
</body>

</html>