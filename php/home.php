<?php
session_start();
if (!isset($_SESSION['Nombre'])) {
    header('location: ../html/index.php?m=5');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Bienvenido <?= $_SESSION['Nombre']; ?></h1>

    <a href="../html/index.php">Cerrar sesión</a>
</body>

</html>