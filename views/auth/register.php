<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Recursos css -->
    <link rel="stylesheet" href="../../resources/css/fuentes.css">
    <link rel="stylesheet" href="../../resources/css/estilos.css">
    <link rel="stylesheet" href="../../resources/css/colores.css">

    <link href="https://www.utn.red/favicon.png" rel="shortcut icon" type="image/x-icon">
    <title>Strong Gym</title>
</head>
<body style="background: #000; color: #fff" class="m-0 vh-100 row justify-content-center align-items-center">
    <div id="mensaje" class="alertify"></div>

    <div class="col-12 col-sm-10 col-md-7 col-lg-4 text-center p-5">
        <form id="register-form">
            <a href="../../"><img src="../../resources/img/svg/Fitness_Outline.svg" alt="GoldFit" width="206" height="106"></a>
            <p class="h1 mb-3 font-playball green-100">Strong Gym</p>
            
            <div class="form-row">
                <div class="col-12 mb-2">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre completo" required autofocus>
                </div>
                <div class="col-12 mb-2">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico" required>
                </div>
                <div class="col-12 mb-2">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                </div>
                <div class="col-12">
                    <input type="password" class="form-control" id="confirm_password" name="confirm-password" placeholder="Confirmar contraseña" required>
                </div>
            </div>
            <button class="btn btn-lg btn-primary btn-block mt-3 mb-3" id="insertar">Crear cuenta</button>
            <a href="login.php" class="text-right">¿Ya tienes una cuenta?</a>
            <p class="mt-5 mb-3 text-muted">NIGLO &copy; 2017-2019</p>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <!-- Scripts requeridos para este archivo -->
    <script src="../../resources/js/register-validations.js"></script>

    <script>
        document.getElementById("insertar").addEventListener("click", registerValidation);
    </script>
</body>
</html>