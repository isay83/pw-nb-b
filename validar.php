<?php
// Recibir comentarios del formulario
// Checar que los datos en la base de datos concuerden
// Redirigir

include 'class/classBD.php';
// obtener datos del formulario
if (isset($_POST['correo']) && isset($_POST['clave'])) {
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
} else {
    header('location: html/login.php?m=2');
}


// cadena de consulta
$query = "SELECT * FROM usuario WHERE Email = '{$correo}' AND Clave = '{$clave}';";
// realizar consulta
$baseDatos->open();
$baseDatos->query($query);
// mostrar los datos
if ($baseDatos->a_numeRegistros == 1) {
    $row = mysqli_fetch_assoc($baseDatos->a_bloqRegistros);
    echo "Nombre: " . $row['Nombre'] . "<br>";
    echo "Email: " . $row['Email'] . "<br>";
} else {
    // redirigir
    header('location: html/login.php?m=1');
    echo "<h2>Verifica el usuario y/o contraseña</h2>"; // redireccionar hacia un lugar en particular
}
