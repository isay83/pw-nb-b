<?php
class BaseDatos
{
    var $a_conexion;
    var $a_servidor;
    var $a_user;
    var $a_pwd;
    var $a_baseDatos;
    var $a_bloqRegistros;
    var $a_numeRegistros;

    function __construct()
    {
        $this->a_servidor = "";
        $this->a_user = "";
        $this->a_pwd = "";
        $this->a_baseDatos = "";
    }

    function open()
    {
        $this->a_conexion = mysqli_connect($this->a_servidor, $this->a_user, $this->a_pwd, $this->a_baseDatos);
        if (!$this->a_conexion) {
            echo "Error al conectar con la base de datos";
        }
    }

    function close()
    {
        mysqli_close($this->a_conexion);
    }

    function query($query)
    {
        $this->a_bloqRegistros = mysqli_query($this->a_conexion, $query);
        $this->a_numeRegistros = mysqli_num_rows($this->a_bloqRegistros);
        $this->close();
    }
}

$baseDatos = new BaseDatos();
