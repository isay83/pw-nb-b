<?php
session_start();
session_unset();

// 3 digitos y 2 operadores
$operacion = generarOperando() . generarOperador() . generarOperando() . generarOperador() . generarOperando();
// Calcular el valor de la operación
$resultado = eval("return $operacion;");

//$_SESSION['capt_login'] = $resuLogin;
//$_SESSION['capt_registro'] = $resuRegistro;
//$_SESSION['capt_contra'] = $resuContra;

function generarOperando()
{
    $operandos = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    return $operandos[array_rand($operandos)];
}

function generarOperador()
{
    $operadores = array('+', '-', '*');
    return $operadores[array_rand($operadores)];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta viewport="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous"-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Menú con Bootstrap</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i>bernalarriaga.com</i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="php/about.php">Sobre nosotros</a>
                    </li>
                    <div class="dropdown" data-bs-theme="light">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
                            Cuenta
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight">
                            <li>
                                <a class="dropdown-item" href="#" onclick="loadModal('loginModal', 'modalContainerLogin', 'html/loginModal.html')">Login</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" onclick="loadModal('registroModal', 'modalContainerRegistro', 'html/registroModal.html')">Registro</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" onclick="loadModal('recuperarModal', 'modalContainerRecuperar', 'html/recuperarModal.html')">Recuperar contraseña</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Configuración</a></li>
                        </ul>
                    </div>
                </ul>
                <!--Other content-->
            </div>
        </div>
    </nav>

    <!-- Contenedor invisible para cargar el modal de login -->
    <div id="modalContainerLogin"></div>

    <!-- Contenedor invisible para cargar el modal de Registro -->
    <div id="modalContainerRegistro"></div>

    <!-- Contenedor invisible para cargar el modal de Recuperar contraseña -->
    <div id="modalContainerRecuperar"></div>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <button class="btn btn-custom-1">Button 1</button>
            </div>
            <div class="col">
                <button class="btn btn-custom-2">Button 2</button>
            </div>
            <div class="col">
                <button class="btn btn-custom-3">Button 3</button>
            </div>
            <div class="col">
                <button class="btn btn-custom-4">Button 4</button>
            </div>
            <div class="col">
                <button class="btn btn-custom-5">Button 5</button>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="card mb-3" style="width: 18rem;">
                    <img src="https://png.pngtree.com/thumb_back/fh260/background/20230414/pngtree-blurred-gradient-background-long-horizontal-texture-design-photo-image_2427181.jpg" class="card-img-top" alt="fondo">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3" style="max-width: 28rem;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://images.pexels.com/photos/433989/pexels-photo-433989.jpeg?auto=compress&cs=tinysrgb&w=400&h=225&dpr=1" alt="fondo">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://img.freepik.com/foto-gratis/pintura-lago-montana-montana-al-fondo_188544-9126.jpg" class="card-img-top" alt="fondo">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Muestra un segundo modal y oculta este con el botón de abajo.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Abre el
                        segundo modal</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Oculta este modal y muestra el primero con el botón de abajo.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Regresa
                        al primer modal</button>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Abre el primer
        modal</button>


    <script src="js/modalLoader.js"></script>
</body>

</html>