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

            switch ($rol) {
                case "administrador":
                    echo $this->renderer->render("./view/administradorView.php",$data);
                    break;
                case "camionero":
                    echo $this->renderer->render("./view/camioneroView.php", $data);
                    break;
                case "mecanico":
                    echo $this->renderer->render("./view/mecanicoView.php", $data);
                    break;
                case "supervisor":
                    echo $this->renderer->render("./view/supervisorView.php", $data);
                    break;
                default:
                    echo $this->renderer->render("./view/pendienteDeRolView.php", $data);
                    break;
            }


        }else{
            $data["mensaje"] = "Usuario y/o contraseña incorrecto";
            echo $this->renderer->render("./view/loginView.php", $data);

        }
    }


}