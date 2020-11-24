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
        $data["mostrarFormularioDeAltaDeCliente"] = "Habilitado" ;
        echo $this->renderer->render("./view/supervisorView.php", $data);
    }



    public function listarTodosLosClientesAEliminar(){

            $traerTodosLosClientesRegistrados = $this->supervisorModel->listarClientes();


        if ($traerTodosLosClientesRegistrados != null) {
            $data["listadoDeClientesAeliminar"] = $traerTodosLosClientesRegistrados;

        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No hay clientes registrados para eliminar";

        }

        echo $this->renderer->render("./view/supervisorView.php", $data);


    }

    public function listarTodosLosClientes(){


        $traerTodosLosClientesRegistrados = $this->supervisorModel->listarClientes();


        if ($traerTodosLosClientesRegistrados != null) {
            $data["listadoDeClientes"] = $traerTodosLosClientesRegistrados;

        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No hay clientes registrados";
        }

        echo $this->renderer->render("./view/supervisorView.php", $data);

    }

    public function mostrarDetalleDeCliente(){

        $id_cliente = $_POST["id_cliente"];
        $data["detalleCliente"] = $this->supervisorModel->buscarClientePorId($id_cliente);
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

        $traerTodosLosClientesRegistrados = $this->supervisorModel->listarClientes();

        if ($traerTodosLosClientesRegistrados != null) {
            $data["listarTodosLosPosiblesClientesAModificar"] = $traerTodosLosClientesRegistrados;

        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No hay clientes registrados para modificar";

        }
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

        $fueModificado = $this->supervisorModel->modificarCliente
        ($id_cliente,$email,$telefono,$contacto1,$contacto2,$cuit,$denominacion,$direccion_calle,$direccion_nro,$direccion_cp);

        if ($fueModificado) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Se ha modificado el tractor de la base de datos";
        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Fallo al modificar cliente";
        }

        echo $this->renderer->render("./view/supervisorView.php",$data);

    }



    public function procesarFormularioCliente(){

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











    public function listarTodosLosTractores(){

        $traerTodosLostractoresRegistrados = $this->supervisorModel->listarTractores();

        if ($traerTodosLostractoresRegistrados != null) {
            $data["listadoDeTractor"] = $traerTodosLostractoresRegistrados;

        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No hay tractores registrados";

        }
        echo $this->renderer->render("./view/supervisorView.php", $data);
    }

    public function mostrarDetalleDeTractor(){

        $idTractor = $_POST["id_tractor"];
        $data["detalleTractor"] = $this->supervisorModel->buscarTractorPorId($idTractor);
        echo $this->renderer->render("./view/supervisorView.php", $data);
    }

    public function darAltaATractor()
    {
        $data["mostrarFormularioDeAltaDeTractor"] = "Habilitado" ;
        echo $this->renderer->render("./view/supervisorView.php", $data);
    }

    public function procesarFormularioTractor(){

        $anioFabricacion = $_POST["anioFabricacion"];
        $nroMotor = $_POST["nroMotor"];
        $nroChasis = $_POST["nroChasis"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $patente = $_POST["patente"];
        $kilometraje = $_POST["kilometraje"];

        $tractoreExisteEnBD= $this->supervisorModel->tractorYaRegistrado($patente);

        if(!$tractoreExisteEnBD){
            $fueRegistrado = $this->supervisorModel->registrarTractor($anioFabricacion , $nroMotor, $nroChasis, $marca , $modelo , $patente , $kilometraje );
        }

        if(isset($fueRegistrado)){
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Registro completado con éxito";
        }else if($tractoreExisteEnBD){
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "El tractor ya existe";
        }else{
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Error al registrar tractor";
        }

        echo $this->renderer->render("./view/supervisorView.php", $data);

    }

    public function listarTodosLosTractoresAEliminar(){

        $traerTodosLostractoresRegistrados = $this->supervisorModel->listarTractores();

        if ($traerTodosLostractoresRegistrados != null) {
            $data["listadoDeTractoresAEliminar"] = $traerTodosLostractoresRegistrados;

        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No hay tractores registrados para eliminar";

        }
        echo $this->renderer->render("./view/supervisorView.php", $data);

    }

    public function eliminarTractor(){

        $idTractor = $_POST["id_tractor"];

        $fueBorrado = $this->supervisorModel->eliminarTractor($idTractor);

        if ($fueBorrado) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Se ha borrado el tractor de la base de datos";
        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Fallo al borrar tractor";
        }


        echo $this->renderer->render("./view/supervisorView.php", $data);
    }

    public function listarTodosLosPosiblesTractoresAModificar()
    {

        $traerTodosLostractoresRegistrados = $this->supervisorModel->listarTractores();

        if ($traerTodosLostractoresRegistrados != null) {
            $data["listarTodosLosPosiblesTractoresAModificar"] = $traerTodosLostractoresRegistrados;

        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No hay tractores registrados para modificar";

        }
        echo $this->renderer->render("./view/supervisorView.php", $data);

    }

    public function mostrarDatosDelTractorConcretoAModificar(){
        $idTractor = $_POST["id_tractor"];
        $data["mostrarDatosDelTractorConcretoAModificar"] = $this->supervisorModel->buscarTractorPorId($idTractor);
        echo $this->renderer->render("./view/supervisorView.php", $data);
    }

    public function modificarTractorConcreto(){

        $idTractor =  $_POST["id_tractor"];
        $anioFabricacion = $_POST["anioFabricacion"];
        $nroMotor = $_POST["nroMotor"];
        $nroChasis = $_POST["nroChasis"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $patente = $_POST["patente"];
        $kilometraje = $_POST["kilometraje"];

        $fueModificado = $this->supervisorModel->modificarTractor($idTractor,$anioFabricacion,$nroMotor,$nroChasis,$marca,$modelo,$patente,$kilometraje);

        if ($fueModificado) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Se ha modificado el tractor en la base de datos";
        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Fallo al modificar cliente";
        }

        echo $this->renderer->render("./view/supervisorView.php",$data);
    }








    public function listarTodosLosArrastrados(){

        $traerTodosLosArrastradosRegistrados = $this->supervisorModel->listarArrastrados();

        if ($traerTodosLosArrastradosRegistrados != null) {
            $data["listadoDeArrastrados"] = $traerTodosLosArrastradosRegistrados;

        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No hay arrastrados registrados";

        }
        echo $this->renderer->render("./view/supervisorView.php", $data);
    }


    public function mostrarDetalleDeArrastrado(){

        $idArrastrado = $_POST["id_arrastrado"];
        $data["detalleArrastrado"] = $this->supervisorModel->buscarArrastradoPorId($idArrastrado);
        echo $this->renderer->render("./view/supervisorView.php", $data);
    }

    public function darAltaAArrastrado()
    {
        $data["mostrarFormularioDeAltaDeArrastrado"] = "Habilitado" ;
        echo $this->renderer->render("./view/supervisorView.php", $data);
    }

    public function procesarFormularioArrastrado(){

        $patente = $_POST["patente"];
        $nroChasis = $_POST["nroChasis"];

        $arrastradoExisteEnBD= $this->supervisorModel->arrastradoYaRegistrado($patente);

        if(!$arrastradoExisteEnBD){
            $fueRegistrado = $this->supervisorModel->registrarArrastrado($patente , $nroChasis);
        }

        if(isset($fueRegistrado)){
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Registro completado con éxito";
        }else if($arrastradoExisteEnBD){
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "El arrastrado ya existe";
        }else{
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Error al registrar arrastrado";
        }

        echo $this->renderer->render("./view/supervisorView.php", $data);

    }

    public function listarTodosLosArrastradosAEliminar(){

        $traerTodosLosArrastradosRegistrados = $this->supervisorModel->listarArrastrados();

        if ($traerTodosLosArrastradosRegistrados != null) {
            $data["listadoDeArrastradosAEliminar"] = $traerTodosLosArrastradosRegistrados;

        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No hay arrastrados registrados para eliminar";

        }
        echo $this->renderer->render("./view/supervisorView.php", $data);

    }

    public function eliminarArrastrado(){

        $idArrastrado = $_POST["id_arrastrado"];

        $fueBorrado = $this->supervisorModel->eliminarArrastrado($idArrastrado);

        if ($fueBorrado) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Se ha borrado el arrastrado de la base de datos";
        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Fallo al borrar el arrastrado";
        }


        echo $this->renderer->render("./view/supervisorView.php", $data);
    }


    public function listarTodosLosPosiblesArrastradosAModificar()
    {

        $traerTodosLosArrastradosRegistrados = $this->supervisorModel->listarArrastrados();

        if ($traerTodosLosArrastradosRegistrados != null) {
            $data["listarTodosLosPosiblesArrastradosAModificar"] = $traerTodosLosArrastradosRegistrados;

        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No hay Arrastrados registrados para modificar";
        }
        echo $this->renderer->render("./view/supervisorView.php", $data);

    }


    public function mostrarDatosDelArrastradoConcretoAModificar(){
        $idArrastrado = $_POST["id_arrastrado"];
        $data["mostrarDatosDelArrastradoConcretoAModificar"] = $this->supervisorModel->buscarArrastradoPorId($idArrastrado);
        echo $this->renderer->render("./view/supervisorView.php", $data);
    }



    public function modificarArrastradoConcreto(){

        $idArrastrado =  $_POST["id_arrastrado"];
        $patente = $_POST["patente"];
        $nroChasis = $_POST["nroChasis"];

        $fueModificado = $this->supervisorModel->modificarArrastrado($idArrastrado,$patente,$nroChasis);

        if ($fueModificado) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Se ha modificado el arrastrado en la base de datos";
        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Fallo al modificar arrastrado";
        }

        echo $this->renderer->render("./view/supervisorView.php",$data);
    }



    public function cerrarSesion()
    {
        session_destroy();
        echo $this->renderer->render("./view/loginView.php");

    }
}