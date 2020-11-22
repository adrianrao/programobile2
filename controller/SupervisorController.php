<?php


class SupervisorController
{
    private $supervisorModel;
    private $renderer;


        public function __construct($supervisorModel, $renderer)
    {
        if(RoleValidation::validarRol("supervisor")){
            $this->supervisorModel = $supervisorModel;
            $this->renderer = $renderer;
        }else{
            RoleValidation::logoutPorRolNoValido($renderer);
        }
    }




    public function index()
    {

        echo $this->renderer->render("view/supervisorView.php");
    }


    public function darAltaACliente()
    {
        echo $this->renderer->render("./view/altaClienteView.php");
    }



    public function listarTodosLosClientesAEliminar(){
            $data["listadoDeClientesAeliminar"] = $this->supervisorModel->listarClientes();
            echo $this->renderer->render("./view/supervisorView.php", $data);
    }

    public function eliminarCliente(){

        $idCliente = $_POST["id_cliente"];

        $fueBorrado = $this->supervisorModel->eliminarClientePorId($idCliente);

        if ($fueBorrado) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Se ha borrado el cliente de la base de datos";
        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Fallo al borrar cliente";
        }


        echo $this->renderer->render("./view/supervisorView.php", $data);
    }

    public function listarTodosLosPosiblesClientesAModificar()
    {
        $data["listarTodosLosPosiblesClientesAModificar"] = $this->supervisorModel->listarClientes();
        echo $this->renderer->render("./view/supervisorView.php", $data);

    }

    public function mostrarDatosDelClienteConcretoAModificar(){
            $id_cliente = $_POST["id_cliente"];
            $data["mostrarDatosDelClienteConcretoAModificar"] = $this->supervisorModel->buscarClientePorId($id_cliente);
            echo $this->renderer->render("./view/supervisorView.php", $data);
    }

    public function modificarClienteConcreto(){
        $id_cliente = $_POST["id_cliente"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $contacto1 = $_POST["contacto1"];
        $contacto2 = $_POST["contacto2"];
        $cuit = $_POST["cuit"];
        $denominacion = $_POST["denominacion"];
        $direccion_calle = $_POST["direccion_calle"];
        $direccion_nro = $_POST["direccion_nro"];
        $direccion_cp = $_POST["direccion_cp"];

        $this->supervisorModel->modificarCliente
        ($id_cliente,$email,$telefono,$contacto1,$contacto2,$cuit,$denominacion,$direccion_calle,$direccion_nro,$direccion_cp);

        echo $this->renderer->render("./view/supervisorView.php");
    }



    public function procesarFormulario(){

        $denominacion = $_POST["denominacion"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $contacto1 = $_POST["contacto1"];
        $contacto2 = $_POST["contacto2"];
        $cuit = $_POST["cuit"];
        $calle = $_POST["calle"];
        $nro = $_POST["nro"];
        $codigoPostal = $_POST["codigoPostal"];

        $clienteExisteEnBD= $this->supervisorModel->clienteYaRegistrado($cuit);

        if(!$clienteExisteEnBD){
            $fueRegistrado = $this->supervisorModel->registrarCliente(

                "$email",
                $telefono,
                $contacto1,
                $contacto2,
                $cuit,
                $denominacion,
                $calle,
                $nro,
                $codigoPostal );
        }


        if(isset($fueRegistrado)){
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Registro completado con éxito";
        }else if($clienteExisteEnBD){
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "El cliente ya existe";
        }else{
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Error al registrar cliente";
        }

        echo $this->renderer->render("./view/supervisorView.php", $data);


    }


    public function cerrarSesion()
    {
        session_destroy();
        echo $this->renderer->render("./view/loginView.php");

    }
}