<?php
include 'classBD.php';
class Acceso extends BaseDatos
{

    function action($cual)
    {
        switch ($cual) {
            case 'formLogin':

            case 'login':
                $this->login();
                break;

            case 'formRecord':

            case 'record':

            case 'formPwd':

            case 'retrievePwd':
        }
    }

    function login()
    {
        if (isset($_POST['correo']) && $_POST['correo'] && isset($_POST['clave']) && $_POST['clave']) {
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];

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
            }
        } else {
            header('location: html/login.php?m=2');
        }
    }
}

$acceso = new Acceso();

if (isset($_REQUEST['accion'])) {
    echo $acceso->action($_REQUEST['accion']);
} else {
    header('location: html/login.php?m=3');
}
