<?php
if (isset($_REQUEST['accion']))
    echo $Categoria->accion($_REQUEST['accion']);
else
    header('location: ../html/index.php?m=5');

include "../class/classCategoria.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Categorías</title>
</head>

<body>
    <!-- Your HTML content goes here -->
</body>

</html>