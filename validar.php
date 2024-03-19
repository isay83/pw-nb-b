<?php
// Recibir comentarios del formulario
// Checar que los datos en la base de datos concuerden
// Redirigir

include 'class/classBD.php';

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

    /*
        $datos = mysqli_fetch_object($datosComprimidos); regresa un objeto
            echo $datos->Correo

        $datos = mysqli_fetch_array($datosComprimidos);
            echo $datos[0]
            echo $datos['Correo'] - arreglos asociativos con tamaño del doble de los campos
        mysqli_fetch($datosComprimidos);
    */
    if ($row = mysqli_fetch_assoc($datosComprimidos)) { //fetch accede al elemento y muestra su contenido
        echo "Nombre: " . $row['Nombre'] . "<br>";
        echo "Email: " . $row['Email'] . "<br>";
    }

    if (mysqli_num_rows($datosComprimidos) == 1) {
    } else {
        header('location: html/login.php?m=1'); // redireccionar hacia un lugar en particular
    }


    // 3er paso
    mysqli_close($conexion);
}
