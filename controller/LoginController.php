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


    public function procesarFormulario()
    {
        if (isset($_SESSION["rol"])) {
            echo $this->renderer->render('./view/' . $_SESSION["rol"] . 'View.php');
        } else {

            $usuarioObtenido = $_POST["usuario"];
            $passwordObtenido = $_POST["password"];
            $usuarioEncontrado = $this->loginModel->buscarEmpleado($usuarioObtenido, $passwordObtenido);
            if ($usuarioEncontrado != null) {
                $data["mensaje"] = $usuarioEncontrado;
                $rolDeUsuario = $usuarioEncontrado[0]["descripcion"];
                $_SESSION["rol"] = $rolDeUsuario;
                $roles = $this->loginModel->traerTodosLosRoles();

                if($usuarioEncontrado[0]["descripcion"] == "chofer"){
                    $usuario = $usuarioEncontrado[0]["usuario"];
                    $informacionDeChofer =$this->loginModel->buscarInformacionDeChofer($usuario);
                    if($informacionDeChofer[0]["nro"] == null || $usuarioEncontrado[0]["tipo_licencia"] == null){
                        $data["notificacion"] = $informacionDeChofer;

                        echo $this->renderer->render("./view/choferView.php", $data);
                        exit();
                    }else{

                    }


                }

                foreach ($roles as $rol) {

                    if($rolDeUsuario == "chofer"){
                        $usuario = $usuarioEncontrado[0]["usuario"];
                        $informacionDeChofer =$this->loginModel->buscarInformacionDeChofer($usuario);


                    if($informacionDeChofer[0]["nro"] == null || $usuarioEncontrado[0]["tipo_licencia"] == null){

                        $data["notificacion"] = $informacionDeChofer;

                        echo $this->renderer->render("./view/choferView.php", $data);
                        exit();
                    }}


                    if ($rolDeUsuario == $rol["descripcion"]) {
                        echo $this->renderer->render('./view/' . $rolDeUsuario . 'View.php', $data);
                        break;
                    } else if ($rolDeUsuario == null) {
                        echo $this->renderer->render("./view/pendienteDeRolView.php", $data);
                        break;
                    }
                }


            } else {
                $data["mensaje"] = "Usuario y/o contraseña incorrecto";
                echo $this->renderer->render("./view/loginView.php", $data);

            }
        }
    }


}