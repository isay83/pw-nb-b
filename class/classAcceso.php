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

            case 'registro':
                $this->registro();
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
        if ($_POST['captcha'] && is_numeric($_POST['captcha']) && $_POST['captcha'] == $_SESSION['capt_login']) {


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
        } else {
            //captcha error
            header('location: ../html/login.php?m=200');
        }
    }

    function registro()
    {
        //include "classBD.php";
        //$conexion = mysqli_connect("localhost", "userTEST", '123', 'test');

        $cadena = "ABCDEFGHIJKLMNPQRSTUVWXYZ123456789123456789";
        $numeC = strlen($cadena);
        $nuevPWD = "";
        for ($i = 0; $i < 8; $i++)
            $nuevPWD .= $cadena[rand() % $numeC];

        $cad = "INSERT INTO usuario SET Nombre='" . $_POST['nombre'] . "', Apellidos='" . $_POST['apellidos'] . "', Email='" . $_POST['correo'] . "', Clave=password('" . $nuevPWD . "')";


        include("class.phpmailer.php");
        include("class.smtp.php");

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com"; //mail.google
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
        $mail->Port = 465;     // set the SMTP port for the GMAIL server
        $mail->SMTPDebug = 1;  // enables SMTP debug information (for testing)
        // 1 = errors and messages
        // 2 = messages only
        $mail->SMTPAuth = true;   //enable SMTP authentication

        $mail->Username =   "21030393@itcelaya.edu.mx"; // SMTP account username
        $mail->Password = "oufd vdnm iyep qnfu";  // SMTP account password

        $mail->From = "";
        $mail->FromName = "";
        $mail->Subject = "Registro completo";
        $mail->MsgHTML("<h1>BIENVENIDO " . $_POST['nombre'] . " " . $_POST['apellidos'] . "</h1><h2> tu clave de acceso es : " . $nuevPWD . "</h2>");
        $mail->AddAddress($_POST['correo']);
        //$mail->AddAddress("admin@admin.com");
        if (!$mail->Send())
            echo  "Error: " . $mail->ErrorInfo;
        else {
            $result = mysqli_query($conexion, $cad);
            header("location: index.php?e=7");
        }
        /*

PROBLEMAS A SOLUCIONAR EN EL REGISTRO
1) DETECTAR QUE EL CORREO YA ESTA REGISTRADO, 
   YA QUE ES LA LLAVE PRIMARIA Y NO SE DEBE ENVIAR
   EL CORREO SI YA ESTABA REGISTRADO.
2) LA CLAVE DEBE DE CIFRARSE, POR QUE EN EL 
   LOGUEO SE CIFRA.


*/
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
