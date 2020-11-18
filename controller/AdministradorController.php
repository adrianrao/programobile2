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

        $traerTodosLosUsuariosSinRol = $this->administradorModel->traerTodosLosUsuariosSinRol();

        if($traerTodosLosUsuariosSinRol != null){
            $roles = $this->administradorModel->traerTodosLosRoles();
            $data["accionDelAdministrador"] = $traerTodosLosUsuariosSinRol;
            $data["roles"] = $roles;
            $data["select"] = "habilitar";
            $data["accion"]="asignarRolAUsuario";
            $data["textoDeLaAccionDelBoton"]="Asignar Rol";
            echo $this->renderer->render("./view/administradorView.php", $data);
        }else{
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "No hay usuarios pendientes de asignar rol";

            echo $this->renderer->render("./view/administradorView.php", $data);
        }

    }

    public function asignarRolAUsuario(){


        if(isset($_POST["usuario"])){
            $idUsuario = $_POST["usuario"];
        }

        if(isset($_POST["rol"])){
            $rol = $_POST["rol"];
        }

        $this->administradorModel->asignarRol($rol,$idUsuario);

        $data["colorNotificacion"] = "green";
        $data["notificacion"] = "El rol ha sido asignado correctamente";

        echo $this->renderer->render("./view/administradorView.php" , $data);

    }

    public function traerTodosLosUsuariosABorrar(){
        $traerTodosLosUsuariosABorrar = $this->administradorModel->traerTodosLosUsuariosABorrar();

        $data["accionDelAdministrador"] = $traerTodosLosUsuariosABorrar;
        $data["accion"]="darDeBajaUnUsuario";
        $data["textoDeLaAccionDelBoton"]="Dar de baja";
        echo $this->renderer->render("./view/administradorView.php", $data);
    }

    public function  darDeBajaUnUsuario(){

        $usuario = $_POST["usuario"];

        $this->administradorModel->deleteUsuario($usuario);
        $data["colorNotificacion"] = "green";
        $data["notificacion"] = "El usuario se elimino correctamente";
        echo $this->renderer->render("./view/administradorView.php",$data);
    }

    public function traerTodosLosUsuariosAModificar(){
        $traerTodosLosUsuariosAModificar = $this->administradorModel->traerTodosLosUsuariosAModificar();

        $data["accionDelAdministrador"] = $traerTodosLosUsuariosAModificar;
        $data["accion"]="modificarAUnUsuario";
        $data["textoDeLaAccionDelBoton"]="Modificar Usuario";
        echo $this->renderer->render("./view/administradorView.php", $data);
    }

    public function  modificarAUnUsuario(){
        $roles = $this->administradorModel->traerTodosLosRoles();
        $usuario = $this->administradorModel->buscarUsuarioPorId($_POST["usuario"]) ;
        $data["usuarioAModificar"]= $usuario;
        $data["roles"] = $roles;
        echo $this->renderer->render("./view/administradorView.php" , $data);

    }

    public function modificarUsuario(){
        $usuario = $_POST["usuario"];
        $nombre_completo= $_POST["nombreCompleto"];
        $dni= $_POST["dni"];
        $f_nac= $_POST["f_nac"];
        $id_rol= $_POST["rol"];

        $fueModificado = $this->administradorModel->modificarUnUsuario($usuario,$nombre_completo,$dni,$f_nac,$id_rol);

        if($fueModificado) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Modificacion Exitosa";
        }else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Fallo la modificacion";
        }

        echo $this->renderer->render("./view/administradorView.php" , $data);


    }

    public function cerrarSesion(){
        session_destroy();
        echo $this->renderer->render("./view/loginView.php");

    }




}