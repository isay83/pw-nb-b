<?php
include 'classBD.php';
class Acceso extends BaseDatos
{

    function action($cual)
    {
        $result = "";
        switch ($cual) {
            case 'formLogin':
                break;

            case 'login':
                $this->login();
                break;

            case 'formRecord':
                break;

            case 'record':
                break;

            case 'formPwd':
                break;

            case 'retrievePwd':
                break;
            default:
                $result .= $cual . "No está definido en el acceso";
        }

        return $result;
    }

    function login()
    {
        if (isset($_POST['correo']) && $_POST['correo'] && isset($_POST['clave']) && $_POST['clave']) {
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];

            $query = "SELECT * FROM usuario WHERE Email = '{$correo}' AND Clave = '{$clave}';";
            // realizar consulta
            $this->open();
            $registro = $this->getRecord($query);
            // mostrar los datos
            if ($this->a_numeRegistros == 1) {
                /*$row = mysqli_fetch_assoc($this->a_bloqRegistros);
                echo "Nombre: " . $row['Nombre'] . "<br>";
                echo "Email: " . $row['Email'] . "<br>";
                */
                $_SESSION['Nombre'] = $registro->Nombre . " " . $registro->Apellidos;

                $_SESSION['Correo'] = $registro->Correo;
                $_SESSION['Id'] = $registro->Id;
                $_SESSION['Foto'] = $registro->Foto;

                header('location: ../php/home.php');
            } else {
                // redirigir
                header('location: ../html/login.php?m=1');
            }
        } else {
            header('location: ../html/login.php?m=2');
        }
    }

    function registro()
    {
    }
}
var_dump($_POST);
//print_r()
// objeto
$acceso = new Acceso();

if (isset($_REQUEST['accion'])) {
    echo $acceso->action($_REQUEST['accion']);
} else {
    header('location: ../html/login.php?m=3');
}
