<?php


class CamioneroModel
{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }



    public function cargarLicenciaYCelular($usuario,$tipoLicencia){

        return $this->database->ejecutarQuery("UPDATE empleado SET tipo_licencia = '$tipoLicencia' WHERE usuario = '$usuario'");


    }


}