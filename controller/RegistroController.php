<?php


class RegistroController
{

    private $registroModel;
    private $renderer;


    public function __construct($registroModel,$renderer){
        $this->registroModel = $registroModel;
        $this->renderer = $renderer;

    }

    public function index(){

        echo $this->renderer->render( "view/registroView.php");
    }


    public function procesarFormulario(){

        $usuario = $_POST["usuario"];
        $nombreCompleto = $_POST["nombreCompleto"];
        $password = $_POST["password"];
        $dni = $_POST["dni"];
        $f_nac = $_POST["f_nac"];

        $usuarioExisteEnDB= $this->registroModel->usuarioYaRegistrado($usuario);

        if(!$usuarioExisteEnDB){
            $fueRegistrado = $this->registroModel->registrarEmpleado($usuario, $nombreCompleto, $password, $dni, $f_nac);
        }


        if(isset($fueRegistrado)){
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Registro completado con éxito";
        }else if($usuarioExisteEnDB){
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "El usuario ya existe";
        }else{
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Error al registrar usuario";
        }

        echo $this->renderer->render("./view/registroView.php", $data);


    }

}