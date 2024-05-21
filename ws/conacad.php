<?/*
$URL = 'https://tigger.celaya.tecnm.mx/ws/soapserver_conacad.php';
$client = new SoapClient($URL . "?wsdl");
var_dump($client->__getFunctions());

$result = $client->avisos("21030393@itcelaya.edu.mx");
echo "<br><br><br>";
echo $result;

$result = $client->materias_alumno("21030393@itcelaya.edu.mx");
echo "<br><br><br>";
echo $result;
*/
$client = new soapClient(null, array(
    'location' => 'http://localhost/pw-nb-b/ws/webservice.php',
    'uri' => 'http://localhost/pw-nb-b/ws/',
));

var_dump($client->__getFunctions());
