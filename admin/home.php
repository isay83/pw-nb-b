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

    <title>Admin</title>
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
                        <a class="nav-link" href="about.php">Sobre nosotros</a>
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
                                <a class="dropdown-item" href="registro.php">Registro</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="recuperar.php">Recuperar contraseña</a>
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

</body>

</html>