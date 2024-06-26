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
            <a class="navbar-brand" href="index.php"><i>bernalarriaga.com</i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
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
                                <a class="dropdown-item" href="#">Registro</a>
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
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>
            <div class="col bg-white p-2 rounded-end">
                <!--div class="text-end">
                    <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png" alt="" width="48">
                </div-->
                <h2 class="fw-bold text-center py-5">Bienvenido</h2>

                <!-- REGISTRO -->

                <form action="#">
                    <div class="mb-4">
                        <label for="nombre" class="form-label">
                            Nombre
                        </label>
                        <input type="text" class="form-control" name="nombre">
                    </div>
                    <div class="mb-4">
                        <label for="apellidos" class="form-label">
                            Apellidos
                        </label>
                        <input type="text" class="form-control" name="apellidos">
                    </div>
                    <div class="mb-4">
                        <label for="genero" class="form-label">Género</label>
                        <select class="form-control" id="genero">
                            <option value="m">Masculino</option>
                            <option value="f">Femenino</option>
                            <option value="o">Otro</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="correo" class="form-label">
                            Correo
                        </label>
                        <input type="text" class="form-control" name="correo">
                    </div>
                    <!--
                    <div class="mb-4">
                        <label for="clave" class="form-label">
                            Contraseña
                        </label>
                        <input type="password" class="form-control" name="clave">
                    </div>
-->
                    <div class="mb-4">
                        <label for="captcha" class="form-label">
                            Captcha
                        </label>
                        <input type="text" class="form-control" name="captcha">
                    </div>
                    <!--div class="mb-4 form-check">
                        <input type="checkbox" name="connected" class="form-check-input">
                        <label for="connected" class="form-check-label">Captcha</label>
                    </div-->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                    </div>
                    <div class="my-3">
                        <span>¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a></span><br>
                    </div>
                </form>

                <!-- REGISTRO CON REDES SOCIAL -->
                <div class="container w-100 my-5">
                    <div class="row">
                        <div class="col-12 text-center">
                            O
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-outline-primary w-100 my-1">
                                    <div class="row align-items-center">
                                        <div class="col-2 d-none d-md-block">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1024px-Facebook_Logo_%282019%29.png" width="32" alt="">
                                        </div>
                                        <div class="col-12 col-md-10 text-center">
                                            Facebook
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn btn-outline-danger w-100 my-1">
                                    <div class="row align-items-center">
                                        <div class="col-2 d-none d-md-block">
                                            <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c543.png" width="32" alt="">
                                        </div>
                                        <div class="col-12 col-md-10 text-center">
                                            Whatssap
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>