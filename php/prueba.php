<?php
$operacion = generarOperando() . generarOperador() . generarOperando() . generarOperador() . generarOperando();
// Calcular el valor de la operación
$resultado = eval("return $operacion;");

function generarOperando()
{
    $operandos = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    return $operandos[array_rand($operandos)];
}

function generarOperador()
{
    $operadores = array('+', '-', '*');
    return $operadores[array_rand($operadores)];
}

// Calcular el valor de la operación
$resultado = eval("return $operacion;");

echo $operacion . " = " . $resultado;
