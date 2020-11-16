<?php


class RegistroModel
{

    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function registrarEmpleado($usuario, $password, $dni, $f_nac){
//        $date = date_create($f_nac);
//        $f_nac = date_format($date,"Y/m/d");
        $result = $this->database->ejecutarQuery("insert into empleado(usuario,password,dni,f_nac)
			        VALUES('$usuario', '$password', $dni, STR_TO_DATE('$f_nac', '%d-%m-%Y'))");
         return $result;
           }


    public function usuarioYaRegistrado($usuario)
    {
        $result = $this->database->ejecutarQuery("SELECT * FROM empleado WHERE usuario = '$usuario'");

        return mysqli_num_rows($result);
    }

}



