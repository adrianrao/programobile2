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

    public function mostrarFormularioProforma()
    {
        

        $data["mostrarFormularioCargaProforma"] = "habilitado";
        $data["cargarSelectCliente"] = $this->supervisorModel->traerTodosLosClientes();
        $data["cargarSelectChofer"] = $this->supervisorModel->traerTodosLosChoferes();
        echo $this->renderer->render("./view/supervisorView.php", $data);
    }



    public function procesarProforma(){

        $id_tractor = $_POST["id_tractor"];
        $id_arrastrado = $_POST["id_arrastrador"];
        $id_cliente = $_POST["id_cliente"];
        $usuario = $_POST["chofer_asignado"];
        $fecha = $_POST["fecha"];
        $cliente_denominacion = $_POST["denominacion"];
        $cliente_cuit = $_POST["cuit"];
        $cliente_direccion = $_POST["direccion"];
        $cliente_telefono = $_POST["telefono"];
        $cliente_email = $_POST["email"];
        $cliente_contacto1 = $_POST["contacto1"];
        $cliente_contacto2 = $_POST["contacto2"];
        $viaje_origen = $_POST["origen"];
        $viaje_destino = $_POST["destino"];
        $viaje_fecha_carga = $_POST["fecha_carga"];
        $viaje_ETA = $_POST["ETA"];
        $carga_tipo = $_POST["tipo_carga"];
        $carga_peso = $_POST["peso_neto"];
        $carga_tipo_hazard = $_POST["tipo_hazard"];
        $carga_temperatura_reefer = $_POST["temperatura_reefer"];
        $costeo_km_estimados = $_POST["km_estimado"];
        $costeo_combustible_estimado = $_POST["combustible_estimado"];
        $costeo_ETD_estimado = $_POST["ETD_estimado"];
        $costeo_ETA_estimado = $_POST["ETA_estimado"];
        $costeo_viaticos_estimado = $_POST["viaticos_estimado"];
        $costeo_peajes_estimado = $_POST["peajes_estimado"];
        $costeo_pesajes_estimado = $_POST["pesajes_estimado"];
        $costeo_extras_estimado = $_POST["extras_estimado"];
        $costeo_hazard_estimado = $_POST["hazard_estimado"];
        $costeo_reefer_estimado = $_POST["reefer_estimado"];
        $costeo_fee_estimado = $_POST["fee_estimado"];


       $result = $this->supervisorModel->registrarProforma(
           $id_tractor,
           $id_arrastrado,
           $id_cliente,
           $usuario,
           $fecha,
           $cliente_denominacion,
           $cliente_cuit,
           $cliente_direccion,
           $cliente_telefono,
           $cliente_email,
           $cliente_contacto1,
           $cliente_contacto2,
           $viaje_origen,
           $viaje_destino,
           $viaje_fecha_carga,
           $viaje_ETA,
           $carga_tipo,
           $carga_peso,
           $carga_tipo_hazard,
           $carga_temperatura_reefer,
           $costeo_km_estimados,
           $costeo_combustible_estimado,
           $costeo_ETD_estimado,
           $costeo_ETA_estimado,
           $costeo_viaticos_estimado,
           $costeo_peajes_estimado,
           $costeo_pesajes_estimado,
           $costeo_extras_estimado,
           $costeo_hazard_estimado,
           $costeo_reefer_estimado,
           $costeo_fee_estimado);

        if(isset($result)){
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Registro completado con éxito";
        }else{
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Error al registrar";
        }


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

        if($fueRegistrado){
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




    public function traerChoferesQueNoTienenLicenciaValidada(){


        $traerTodosLosChoferesSinLicenciaValida = $this->supervisorModel->traerChoferesAValidarLicencia();
        $traerTodosLosTiposDeLicencia = $this->supervisorModel->traerTiposDeLicencia();


        if ($traerTodosLosChoferesSinLicenciaValida != null) {
            $data["traerChoferesQueNoTienenLicenciaValidada"] = $traerTodosLosChoferesSinLicenciaValida;
            $data["traerTodosLosTiposDeLicencia"] = $traerTodosLosTiposDeLicencia;
        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No hay Choferes con licencia sin validar";
        }
        echo $this->renderer->render("./view/supervisorView.php", $data);
    }

    public function validarLicenciaDeChoferSeleccionado(){


        if (isset($_POST["usuario"])) {
            $usuario = $_POST["usuario"];
        }

        if (isset($_POST["idTipoDeLicencia"])) {
            $idTipoDeLicencia = $_POST["idTipoDeLicencia"];
        }


        $fueValidado = $this->supervisorModel->validarLicenciaChofer($usuario,$idTipoDeLicencia);

        if ($fueValidado) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Se ha validado la licencia del chofer con exito";
        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Fallo al validar licencia";
        }

        echo $this->renderer->render("./view/supervisorView.php",$data);
    }



    public function listarTodosLosCelulares(){

        $traerTodosLosCelularesRegistrados = $this->supervisorModel->traerTodosLosCelulares();

        if ($traerTodosLosCelularesRegistrados != null) {
            $data["listadoDeCelulares"] = $traerTodosLosCelularesRegistrados;

        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No hay celulares registrados";

        }
        echo $this->renderer->render("./view/supervisorView.php", $data);
    }

    public function cargarFormularioDeAltaAcelular()
    {
        $data["mostrarFormularioDeAltaDeCelular"] = "Habilitado" ;
        echo $this->renderer->render("./view/supervisorView.php", $data);
    }

    public function procesarFormularioCelular(){

        $numeroCelular = $_POST["numeroCelular"];


        $celularYaRegistrado = $this->supervisorModel->celularYaRegistrado($numeroCelular);

        if(!$celularYaRegistrado){
            $fueRegistrado = $this->supervisorModel->darDeAltaCelular($numeroCelular);
        }

        if($fueRegistrado){
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Registro completado con éxito";
        }else if($celularYaRegistrado){
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "El celular ya existe";
        }else{
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Error al registrar celular";
        }

        echo $this->renderer->render("./view/supervisorView.php", $data);

    }

    public function listarTodosLosPosiblesCelularesAModificar()
    {

        $traerTodosLosCelularesRegistrados = $this->supervisorModel->traerTodosLosCelulares();

        if ($traerTodosLosCelularesRegistrados != null) {
            $data["listadoDeCelularesPosiblesAModificar"] = $traerTodosLosCelularesRegistrados;

        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No hay Celulares registrados para modificar";
        }
        echo $this->renderer->render("./view/supervisorView.php", $data);

    }

    public function quitarChoferAsignado(){

        $idCelular = $_POST["idCelular"];

        $choferDesasignado = $this->supervisorModel->desasignarCelular($idCelular);

        if ($choferDesasignado) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "El celular ha quedado sin asignar";
        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No se pudo modificar la asignacion";
        }


        echo $this->renderer->render("./view/supervisorView.php", $data);
    }

    public function mostrarDatosDelCelularConcretoAModificar(){
        $idCelular = $_POST["idCelular"];

        $celularConcretoAModificar = $this->supervisorModel->traerCelularPorId($idCelular);
        $data["mostrarDatosDelCelularConcretoAModificar"] = $celularConcretoAModificar;
        $data["traerPosiblesChoferesAAsignar"] = $this->supervisorModel->traerATodosLosChoferesSinCelularAsignado();


        if($celularConcretoAModificar[0]["id_chofer"] == null){
            $data["habilitaElNoTieneChoferAsignado"] = "habilitado";
        }else {
            $data["habilitaElChoferQueTieneAsignado"] = "habilitado";
        }

        echo $this->renderer->render("./view/supervisorView.php", $data);
    }



    public function modificarCelularConcreto(){

        $idCelular =  $_POST["idCelular"];
        $numeroDeCelular = $_POST["numeroCelular"];

        $fueModificado = $this->supervisorModel->modificarCelular($idCelular,$numeroDeCelular);



        if ($fueModificado) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Se ha modificado la informacion del celular";
        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Fallo al modificar informacion del celular";
        }

        echo $this->renderer->render("./view/supervisorView.php",$data);
    }


    public function mostrarCelularesSinAsignacionDeChofer(){

        $traerTodosLosCelularesSinChoferAsignado = $this->supervisorModel->traerTodosLosCelularesSinAsignar();
        $traerTodosLosChoferesSinCelularAsignado = $this->supervisorModel->traerATodosLosChoferesSinCelularAsignado();

        if($traerTodosLosChoferesSinCelularAsignado == null){
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No hay choferes para asignar";
        }else{


        if ($traerTodosLosCelularesSinChoferAsignado != null) {
            $data["mostrarCelularesSinAsignacionDeChofer"]= $traerTodosLosCelularesSinChoferAsignado;
            $data["choferesSinCelularAsignado"]= $traerTodosLosChoferesSinCelularAsignado;
        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "No hay celulares sin ser asignados";

        }
        }


        echo $this->renderer->render("./view/supervisorView.php",$data);

    }

    public function asignarCelularAChofer(){

        $idCelular =  $_POST["idCelular"];
        $choferAsignado = $_POST["usuario"];

        $fueAsignado = $this->supervisorModel->asignarCelular($idCelular,$choferAsignado);



        if ($fueAsignado) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Se ha asignado el chofer correctamente";
        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Fallo al asignar el chofer";
        }

        echo $this->renderer->render("./view/supervisorView.php",$data);
    }






    public function cerrarSesion()
    {
        session_destroy();
        echo $this->renderer->render("./view/loginView.php");

    }
}