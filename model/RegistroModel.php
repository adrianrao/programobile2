<?php


class RegistroModel
{

    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function registrarEmpleado($usuario, $password, $dni, $f_nac){
        $result = $this->database->ejecutarQuery("insert into empleado(usuario,password,dni,f_nac)
			        VALUES('$usuario', '$password', $dni, $f_nac)");
         return $result;
           }


    public function usuarioYaRegistrado($usuario)
    {
        $result = $this->database->ejecutarQuery("SELECT * FROM empleado WHERE usuario = '$usuario'");

        return mysqli_num_rows($result);
    }

}


