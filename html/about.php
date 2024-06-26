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
                        <a class="nav-link" href="#">Sobre nosotros</a>
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
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container p-4">
        <section class="about-section">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sobre nosotros</h2>
                    <p>Nuestro equipo está formado por expertos apasionados por la tecnología y el diseño. Desde
                        diseñadores creativos y desarrolladores hábiles hasta estrategas digitales experimentados, cada
                        miembro de nuestro equipo aporta su talento único para crear experiencias web excepcionales que
                        cautivan a tu audiencia y generan resultados tangibles.</p>
                </div>
                <div class="col-md-6">
                    <img src="https://gunkastudios.com/wp-content/uploads/2021/09/como-elegir-una-empresa-de-desarrollo-web.jpg" alt="About Us Image" class="img-fluid">
                </div>
            </div>
        </section>
    </div>

</body>

</html>