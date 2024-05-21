<?php
class comportamiento
{
    function sumar($d1, $d2)
    {
        return $d1 + $d2;
    }

    function potencia($d1, $d2)
    {
        return pow($d1, $d2);
    }

    function tabla($n)
    {
        $datos = array();
        for ($row = 1; $row < 11; $row++) {
            $datos[$row] = array();
            $datos[$row][0] = $n;
            $datos[$row][1] = $row;
            $datos[$row][2] = $n * $row;
        }
        return json_encode($datos);
    }
    function horoscopo($s)
    {
        $mensajes = array(
            "aries" => "Hoy es un buen día para tomar decisiones importantes.",
            "tauro" => "La paciencia es una virtud que te llevará lejos.",
            "geminis" => "La comunicación clara y honesta te abrirá muchas puertas.",
            "cancer" => "Confía en tu intuición para tomar decisiones.",
            "leo" => "Tu creatividad te llevará a alcanzar grandes logros.",
            "virgo" => "Organiza tus ideas y planifica tus metas para tener éxito.",
            "libra" => "El equilibrio es la clave para una vida armoniosa.",
            "escorpio" => "No temas enfrentar los desafíos, te harán más fuerte.",
            "capricornio" => "El esfuerzo y la perseverancia te llevarán al éxito.",
            "acuario" => "Sé auténtico y sigue tu propio camino.",
            "piscis" => "Confía en tu intuición y sigue tus sueños."
        );

        return $mensajes[$s];
    }
}


$server = new soapServer(null, array('uri' => 'http://localhost/pw-nb-b/ws/webservice.php'));
$server->setClass('comportamiento');
$server->handle();
