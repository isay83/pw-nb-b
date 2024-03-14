<?php
// Recibir comentarios del formulario
// Checar que los datos en la base de datos concuerden
// Redirigir

$correo = $_POST['correo'];
$clave = $_POST['clave'];

// 1er paso 
$conexion = mysqli_connect("127.0.0.1", "basta", "1234", "basta");

if (!$conexion)
    exit;
else {
    // 2do paso
    $query = "SELECT * FROM usuario WHERE Email = '{$correo}' AND Clave = '{$clave}';";
    $datosComprimidos = mysqli_query($conexion, $query);

    // procesar los datos consultados
    while ($row = mysqli_fetch_assoc($datosComprimidos)) {
        echo "Nombre: " . $row['Nombre'] . "<br>";
        echo "Email: " . $row['Email'] . "<br>";
    }

    // 3er paso
    mysqli_close($conexion);
}

?>
```