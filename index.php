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
    <link rel="stylesheet" href="resources/css/fuentes.css">
    <link rel="stylesheet" href="resources/css/estilos.css">
    <link rel="stylesheet" href="resources/css/colores.css">

    <link href="https://www.utn.red/favicon.png" rel="shortcut icon" type="image/x-icon">
    <title>Strong Gym</title>
</head>
<body>
    <header> 
        <nav class="navbar navbar-expand-lg navbar-light shadow text-white" style="background: #000;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand font-playball text-white" href="/">Strong Gym</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-white" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-white" href="#">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-white" href="views/auth/login.php">Iniciar sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container-fluid">
        <div class="row body-peso-muerto">
            <div class="col-12 col-lg-8 vh-100">
                <!-- Laptop hacia arriba -->
                <div class="d-none d-lg-block">
                    <p class="display-4 text-white font-rubikvinyl p-5">NO DEJES PARA MAÑANA LO QUE PUEDES HACER HOY</p>
                    <h3 class="display-3 font-playball green-100 px-5">STRONG GYM</h3>
                    <a class="btn btn-lg btn-outline-light ml-5 mt-5" href="views/auth/login.php">CREAR RUTINA</a>
                </div>
                <!-- celular y tablet -->
                <div class="d-block d-lg-none">
                    <p class="h1 text-white font-rubikvinyl p-5">NO DEJES PARA MAÑANA LO QUE PUEDES HACER HOY</p>
                    <h3 class="h1 font-playball green-100 px-5">STRONG GYM</h3>
                    <a class="btn btn-lg btn-outline-light ml-5 mt-5" href="views/auth/login.php">CREAR RUTINA</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer style="background: #000;" class="container-fluid">
        <div class="row justify-content-center pb-5">
            <div class="col-12 text-center">
                <img src="resources/img/svg/Fitness_Outline.svg" alt="GoldFit" width="306" height="206">
                <p class="h1 font-playball green-100">Strong Gym</p>

                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
            <div class="col-10">
                <hr style="height:0.2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="col-12 text-center pt-3">
                NIGLO &copy; 2023
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>