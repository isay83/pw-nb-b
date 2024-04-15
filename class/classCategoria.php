<?php
/* 
    Cuando se agregue JS se debe´ra ajustar el uso de sesiones sin pasar por la vista
*/
include 'classBD.php';
class Categoria extends BaseDatos
{

    function action($accion)
    {
        $result = "";
        switch ($accion) {
            case 'fornmEdit':
                break;

            case 'formNew':

                break;

            case 'update':

                break;

            case 'insert':

                break;

            case 'report':
                $result = $this->despTablaDatos("SELECT * FROM Categoria ORDER BY Nombre");
                break;


            case 'delete':

                break;
            default:
                $result .= $accion . "No está definido en el acceso";
        }

        return $result;
    }

    function despTablaDatos($query)
    {
        $html = "";
        $this->query($query);
        foreach ($this->a_bloqRegistros as $row) {
            foreach ($row as $datos) {
                $html .= $datos . " ";
            }
            $html .= "<br>";
        }

        return $html;
    }
}

$Categoria = new Categoria();

if (isset($_REQUEST['accion'])) {
    echo $Categoria->action($_REQUEST['accion']);
} else
    echo $Categoria->action("report");
