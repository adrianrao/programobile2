<?php


class AdministradorController
{

    private $administradorModel;
    private $renderer;


    public function __construct($administradorModel,$renderer){
        $this->administradorModel = $administradorModel;
        $this->renderer = $renderer;

    }

    public function index(){

        echo $this->renderer->render( "view/administradorView.php");
    }


    public function obtenerUsuariosSinRol(){

        $usuariosSinRoles = $this->administradorModel->traerTodosLosUsuariosSinRol();

        if($usuariosSinRoles != null){
            $roles = $this->administradorModel->traerTodosLosRoles();
            $data["UsuariosSinRol"] = $usuariosSinRoles;
            $data["roles"] = $roles;
            echo $this->renderer->render("./view/administradorView.php", $data);
        }else{



            $data["sinPendientesDeRol"] = "No hay usuarios pendentes de asignar rol";

            echo $this->renderer->render("./view/administradorView.php", $data);
        }

    }

    public function asignarRolAUsuario(){
        $idUsuario = $_POST["idUsuario"];
        $rol = $_POST["rol"];

        $this->administradorModel->asignarRol($rol,$idUsuario);

        echo $this->renderer->render("./view/administradorView.php");

    }

    public function traerTodosLosUsuariosABorrar(){
        $todosLosUsuarios = $this->administradorModel->traerTodosLosUsuariosABorrar();

        $data["usuariosABorrar"] = $todosLosUsuarios;
        echo $this->renderer->render("./view/administradorView.php", $data);
    }

    public function  darDeBajaUnUsuario(){

        $idUsuario = $_POST["idUsuario"];

        $this->administradorModel->deleteUsuario($idUsuario);
        echo $this->renderer->render("./view/administradorView.php");
    }

    public function traerTodosLosUsuariosAModificar(){
        $todosLosUsuarios = $this->administradorModel->traerTodosLosUsuariosAModificar();

        $data["usuariosAModificar"] = $todosLosUsuarios;
        echo $this->renderer->render("./view/administradorView.php", $data);
    }

    public function  modificarAUnUsuario(){
        $roles = $this->administradorModel->traerTodosLosRoles();
        $usuario = $this->administradorModel->buscarUsuarioPorId($_POST["idUsuario"]) ;
        $data["usuarioAModificar"]= $usuario;
        $data["roles"] = $roles;
        echo $this->renderer->render("./view/administradorModificarUsuarioView.php" , $data);

    }

    public function modificarUsuario(){
        $idUsuario = $_POST["idUsuario"];
        $usuario= $_POST["usuario"];
        $dni= $_POST["dni"];
        $f_nac= $_POST["f_nac"];
        $id_rol= $_POST["rol"];

        $fueModificado = $this->administradorModel->modificarUnUsuario($idUsuario,$usuario,$dni,$f_nac,$id_rol);

        if($fueModificado) {
            $data["modificacionOk"] = "Modificacion Exitosa";
        }else {
            $data["modificacionFallo"] = "Fallo la modificacion";
        }

        echo $this->renderer->render("./view/administradorView.php" , $data);


    }




}