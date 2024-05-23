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
    'uri' => 'urn:webservices',
));

//var_dump($client->__getFunctions());
var_dump($client->sumar(8, 3));
echo "<br><br><br>";
// imprimir la tabla
$tableData = $client->tabla(8);
$tableArray = json_decode($tableData, true);

foreach ($tableArray as $row) {
    echo $row[0] . " × " . $row[1] . " = " . $row[2] . "<br>";
}
