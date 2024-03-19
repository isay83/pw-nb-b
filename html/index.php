<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta viewport="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
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
                        <a class="nav-link" href="about.html">Sobre nosotros</a>
                    </li>
                    <div class="dropdown" data-bs-theme="light">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
                            Cuenta
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight">
                            <li>
                                <a class="dropdown-item" href="login.php">Login</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="registro.html">Registro</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="recuperar.html">Recuperar contraseña</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Configuración</a></li>
                        </ul>
                    </div>
                    <!--li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li-->
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

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
                            <img src="data:image/jpeg;base64,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" class="img-fluid rounded-start" alt="fondo">
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




</body>

</html>