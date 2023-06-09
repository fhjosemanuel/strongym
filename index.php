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
        <div class="row body-polea">
            <div class="col-12 pt-5 pb-3 px-5">
                <h2 class="text-center text-white pb-3">CREA TU RUTINA</h2>
                

                <div class="row black">
                    <div class="col-sm-6 mt-3 body-grartob text-white">
                        <div class="card body-grartob">
                            <div class="card-body">
                                <h4>¿Qué incluye crear tu rutina?</h4>
                                
                                <ul>
                                    <li>Crea tus recordatorios de entrenos</li>
                                    <li>Crea tu lista de ejercicios</li>
                                    <li>Crea tu dieta</li>
                                    <li>Recibir notificaciones</li>
                                </ul>
                                <div  class="text-center">
                                    <a class="btn btn-lg btn-outline-light" href="views/auth/login.php">CREAR RUTINA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-3 body-grartob">
                        <div class="card body-grartob text-white">
                            <div class="card-body">
                                <h4>Hazte premium</h4>
                                
                                <ul>
                                    <li>Crea sin límites</li>
                                    <li>Acceso al blog</li>
                                    <li>Ve la dietas de los demás</li>
                                    <li>Sigue a otros usuarios</li>
                                </ul>
                                <div  class="text-center">
                                    <a class="btn btn-lg btn-outline-light" href="views/auth/login.php">HAZME PREMIUM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row bg-white py-5">
            <div class="col-12 pt-5 text-center h2 font-weight-bold orange-100">
                Genera tu rutina
            </div>
            <div class="col-12 pt-5 text-center">
                Lunes / Martes / Miércoles / Jueves / Viernes
            </div>
            <div class="table-responsive mt-5 mx-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Horario</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miércoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>7:00 - 7:20</th>
                            <th>Desayunar</th>
                            <th>Desayunar</th>
                            <th>Desayunar</th>
                            <th>Desayunar</th>
                            <th>Desayunar</th>
                        </tr>
                        <tr>
                            <th>8:00 - 9:00</th>
                            <th>Tomar creatina</th>
                            <th>Tomar proteiína</th>
                            <th>Tomar creatina</th>
                            <th>Tomar proteiína</th>
                            <th>Tomar creatina</th>
                        </tr>
                        <tr>
                            <th>9:00 - 11:00</th>
                            <th>Entrenamiento</th>
                            <th>Entrenamiento</th>
                            <th>Entrenamiento</th>
                            <th>Entrenamiento</th>
                            <th>Entrenamiento</th>
                        </tr>
                        <tr>
                            <th>11:00 - 11:30</th>
                            <th>Comer postentreno</th>
                            <th>Comer postentreno</th>
                            <th>Comer postentreno</th>
                            <th>Comer postentreno</th>
                            <th>Comer postentreno</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row bg-black text-white py-5 justify-content-around">
            <div class="col-12 text-center">
                <p class="h1">NUESTRO GYM</p>
            </div>
            <div class="col-auto pt-5">
                <div class="card" style="width: 18rem;">
                    <img src="resources/img/strong-women.jpg" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-auto pt-5">
                <div class="card" style="width: 18rem;">
                    <img src="resources/img/comunidad-gym.jpg" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-auto pt-5">
                <div class="card" style="width: 18rem;">
                    <img src="resources/img/strong-man.jpg" class="card-img-top" alt="...">
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