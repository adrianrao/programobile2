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
        return $this->database->query("SELECT * FROM empleado LEFT JOIN rol ON empleado.id_rol = rol.id_rol LEFT JOIN celular on empleado.usuario = celular.id_chofer LEFT JOIN tipo_de_licencia on empleado.tipo_licencia = tipo_de_licencia.id_tipo_licencia WHERE usuario = '$usuario'");
    }

    public function traerTodosLosRoles(){
        return $this->database->query("select * FROM rol");
    }

    public function validarSiELUsuarioEsChoferYSiTodosLosDatosEstanCargados($datosDelUsuario){
        $esChoferConDatosValidados = true;

        if($datosDelUsuario[0]["descripcion"] == "chofer"){
            $esChoferConDatosValidados= $this->validaSiElChoferTieneTodosLosDatosCargados($datosDelUsuario);
        }

        return $esChoferConDatosValidados;
    }

    private function validaSiElChoferTieneTodosLosDatosCargados($datosDelUsuario){

        $losDatosEstanCargados = false;

        $usuario = $datosDelUsuario[0]["usuario"];
        $informacionDeChofer = $this->buscarInformacionDeChofer($usuario);

            if($informacionDeChofer[0]["nro"] == null || $datosDelUsuario[0]["tipo_licencia"] == null){

                $losDatosEstanCargados = false;

            }else{

                $losDatosEstanCargados = true;
            }
            return $losDatosEstanCargados;
        }



}