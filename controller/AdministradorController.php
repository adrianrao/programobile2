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

        $fueAssignado = $this->administradorModel->asignarRol($rol,$idUsuario);

        if($fueAssignado) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "El rol ha sido asignado correctamente";
        }else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "El rol no se pudo asignar correctamente";
        }


        echo $this->renderer->render("./view/administradorView.php" , $data);

    }

    public function traerTodosLosUsuariosABorrarOBloquear(){
        $traerTodosLosUsuariosABorrar = $this->administradorModel->traerTodosLosUsuariosABorrar();

        if($traerTodosLosUsuariosABorrar != null) {
            $data["accionDelAdministrador"] = $traerTodosLosUsuariosABorrar;
            $data["accion"] = "darDeBajaUnUsuario";
            $data["accion2"] = "bloquearUnUsuario";
            $data["textoDeLaAccionDelBoton"] = "Dar de baja";
            $data["textoDeLaAccionDelBoton2"] = "Bloquear";
            echo $this->renderer->render("./view/administradorView.php", $data);
        }else{
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No hay usuarios para borrar o bloquear";

            echo $this->renderer->render("./view/administradorView.php", $data);
        }
    }

    public function  darDeBajaUnUsuario(){

        $usuario = $_POST["usuario"];

        $fueBorrado = $this->administradorModel->deleteUsuario($usuario);

        if($fueBorrado) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Se ha borrado el usuario de la base de datos";
        }else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Fallo al borrar usuario";
        }


        echo $this->renderer->render("./view/administradorView.php",$data);
    }

    public function  bloquearUnUsuario(){

        $usuario = $_POST["usuario"];

        $fueBloqueado = $this->administradorModel->bloquearAUnUsuario($usuario);


        if($fueBloqueado) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Se ha bloqueado el usuario del sistema";
        }else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Fallo al bloquear el usuario";
        }


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