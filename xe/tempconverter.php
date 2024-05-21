<?
$URL = 'https://www.w3schools.com/xml/tempconvert.asmx';
$client = new SoapClient($URL . "?wsdl");
$result = $client->FahrenheitToCelsius(array('Fahrenheit' => 100));
echo $result->FahrenheitToCelsiusResult;
// tigger.celaya.tecnm.mx/ws/soapserver_conacad.php
