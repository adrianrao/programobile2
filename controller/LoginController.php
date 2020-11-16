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
        $usuarioEncontrado = $this->loginModel->buscarEmpleado($usuarioObtenido,$passwordObtenido);
        if($usuarioEncontrado != null){
            $data["mensaje"] = $usuarioEncontrado;
            $rol = $usuarioEncontrado[0]["descripcion"];
            $_SESSION["rol"] = $rol;
            if(strtolower($rol) == strtolower("administrador"))
                echo $this->renderer->render("./view/administradorView.php", $data);
            else
                echo "Bienvenido usuario : $rol";

        }else{
            $data["mensaje"] = "Usuario y/o contraseña incorrecto";
            echo $this->renderer->render("./view/loginView.php", $data);

        }
    }


}