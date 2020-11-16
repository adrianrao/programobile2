<?php


class LoginController
{

    private $loginModel;
    private $renderer;


    public function __construct($loginModel,$renderer){
        $this->loginModel = $loginModel;
        $this->renderer = $renderer;

    }

    public function index(){
        echo $this->renderer->render( "view/loginView.php");
    }


    public function procesarFormulario(){
        $usuarioObtenido = $_POST["usuario"];
        $passwordObtenido = $_POST["password"];
        $usuarioEncontrado = $this->loginModel->buscarEmpleadoPorUsuarioYPassword($usuarioObtenido,$passwordObtenido);

        if($usuarioEncontrado != null){
            $data["mensaje"] = $usuarioEncontrado;
            echo $this->renderer->render("./view/pendienteDeRolView.php", $data);

        }else{
            $data["mensaje"] = "Usuario y/o contraseña incorrecto";
            echo $this->renderer->render("./view/loginView.php", $data);

        }
    }


}