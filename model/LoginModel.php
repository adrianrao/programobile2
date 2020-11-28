<?php


class LoginModel
{

    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function buscarEmpleadoPorUsuarioYPassword($nombre, $password){
        return $this->database->query("SELECT * FROM empleado WHERE usuario = '$nombre' and password = '$password'");
    }

    public function buscarEmpleado($usuario,$password){
        return $this->database->query("SELECT * FROM empleado LEFT JOIN rol ON empleado.id_rol = rol.id_rol WHERE usuario = '$usuario' and password = '$password'");
    }

    public function buscarInformacionDeChofer($usuario){
        return $this->database->query("SELECT * FROM empleado LEFT JOIN rol ON empleado.id_rol = rol.id_rol LEFT JOIN celular on empleado.usuario = celular.id_chofer WHERE usuario = '$usuario'");
    }

    public function traerTodosLosRoles(){
        return $this->database->query("select * FROM rol");
    }


}