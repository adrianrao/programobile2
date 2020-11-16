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
        $password = $_POST["password"];
        $dni = $_POST["dni"];
        $f_nac = $_POST["f_nac"];

        $usuarioExisteEnDB= $this->registroModel->usuarioYaRegistrado($usuario);

        if(!$usuarioExisteEnDB){
            $fueRegistrado = $this->registroModel->registrarEmpleado($usuario, $password, $dni, $f_nac);
        }

        if(isset($fueRegistrado)){
            $data["mensajeOk"] = "Registro completado con éxito";
        }else if($usuarioExisteEnDB){
            $data["mensaje"] = "El usuario ya existe";
        }else{
            $data["mensaje"] = "Error al registrar usuario";
        }

        echo $this->renderer->render("./view/registroView.php", $data);


    }

}