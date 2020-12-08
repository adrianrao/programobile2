<?php


class ProformaController
{
    private $proformaModel;
    private $renderer;
    private $data;
    private $showNotifiacation;


    public function __construct($supervisorModel, $renderer)
    {
        if(RoleValidation::validarRol("supervisor")){
            $this->proformaModel = $supervisorModel;
            $this->renderer = $renderer;
            $this->data["supervisor"] = true;
            $this->showNotifiacation = new ShowNotification($renderer,"supervisor" );
        }else{
            RoleValidation::logoutPorRolNoValido($renderer);
        }
    }

    public function index()
    {
        echo $this->renderer->render("view/supervisor/supervisorView.php",$this->data);
    }

    public function mostrarProformas(){

        $traerTodasLasProformasRegistradas = $this->proformaModel->obtenerProformas();

        if ($traerTodasLasProformasRegistradas != null) {
            $this->data["mostrarListadoDeProformas"] = $traerTodasLasProformasRegistradas;
            echo $this->renderer->render("./view/supervisor/proforma/mostrarListadoDeProformasView.php", $this->data);
        } else {
            $this->showNotifiacation->mostrar("No hay proformas registradas","red");
        }

    }
    public function mostrarDetalle(){
        $idProforma = $_POST["id_proforma"];
        $registro = $this->proformaModel->obtenerProforma($idProforma);
        $this->data["mostrarDetalleDeProforma"] = $registro;
        echo $this->renderer->render("./view/supervisor/proforma/mostrarDetalleDeProformaView.php", $this->data);
    }


    public function mostrarFormularioProforma(){
        $this->data["cargarSelectCliente"] = $this->proformaModel->traerTodosLosClientes();
        $this->data["cargarSelectChofer"] = $this->proformaModel->traerTodosLosChoferes();
        $this->data["cargarSelectArrastrado"] = $this->proformaModel->traerTodosLosArrastrados();
        $this->data["cargarSelectTractor"] = $this->proformaModel->traerTodosLosTractores();
        echo $this->renderer->render("./view/supervisor/proforma/mostrarFormularioAltaDeProformaView.php", $this->data);
    }

    public function procesarProforma(){

        $id_tractor = $_POST["id_tractor"];
        $id_arrastrado = 1;
        $id_cliente = $_POST["id_cliente"];
        $usuario = $_POST["chofer_asignado"];
        $fecha = $_POST["fecha"];
        $viaje_origen = $_POST["origen"];
        $viaje_destino = $_POST["destino"];
        $viaje_fecha_carga = $_POST["fecha_carga"];
        $viaje_ETD = $_POST["ETD"];
        $viaje_ETA = $_POST["ETA"];
        $carga_tipo = $_POST["tipo_carga"];
        $carga_peso = $_POST["peso_neto"];
        $carga_tipo_hazard = $_POST["tipo_hazard"];
        $carga_temperatura_reefer = $_POST["temperatura_reefer"];
        $costeo_km_estimados = $_POST["km_estimado"];
        $costeo_combustible_estimado = $_POST["combustible_estimado"];
        $costeo_viaticos_estimado = $_POST["viaticos_estimado"];
        $costeo_peajes_estimado = $_POST["peajes_estimado"];
        $costeo_pesajes_estimado = $_POST["pesajes_estimado"];
        $costeo_extras_estimado = $_POST["extras_estimado"];
        $costeo_hazard_estimado = $_POST["hazard_estimado"];
        $costeo_reefer_estimado = $_POST["reefer_estimado"];
        $costeo_fee_estimado = $_POST["fee_estimado"];

        $costeo_total_estimado =
            $costeo_km_estimados+
            $costeo_combustible_estimado+
            $costeo_viaticos_estimado+
            $costeo_peajes_estimado+
            $costeo_pesajes_estimado+
            $costeo_extras_estimado+
            $costeo_hazard_estimado+
            $costeo_reefer_estimado+
            $costeo_fee_estimado;







        $result = $this->proformaModel->registrarProforma(
            $id_tractor,
            $id_arrastrado,
            $id_cliente,
            $usuario,
            $fecha,
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
            $costeo_viaticos_estimado,
            $costeo_peajes_estimado,
            $costeo_pesajes_estimado,
            $costeo_extras_estimado,
            $costeo_hazard_estimado,
            $costeo_reefer_estimado,
            $costeo_fee_estimado,
            $costeo_total_estimado,
            $viaje_ETD);



        if(isset($result)){
            $this->data["colorNotificacion"] = "green";
            $this->data["notificacion"] = "Registro completado con éxito";
        }else{
            $this->data["colorNotificacion"] = "red";
            $this->data["notificacion"] = "Error al registrar";
        }

        $this->data["cargarSelectChofer"] = $this->proformaModel->traerTodosLosChoferes();
        $this->data["cargarSelectTractor"] = $this->proformaModel->traerTodosLosTractores();
        $this->data["cargarSelectArrastrado"] = $this->proformaModel->traerTodosLosTractores();


        echo $this->renderer->render("view/supervisor/supervisorView.php",$this->data);
    }

    public function mostrarProformasAEliminar(){

        $traerTodasLasProformasRegistradas = $this->proformaModel->obtenerProformas();

        if ($traerTodasLasProformasRegistradas != null) {
            $this->data["mostrarListadoDeProformasAEliminar"] = $traerTodasLasProformasRegistradas;
            echo $this->renderer->render("./view/supervisor/proforma/mostrarListadoDeProformasAEliminarView.php", $this->data);
        } else {
            $this->showNotifiacation->mostrar("No hay proformas a eleminar","red");
        }
    }

    public function eliminar(){
        $idProforma = $_POST["id_proforma"];
        $elimino = $this->proformaModel->eliminar($idProforma);
        if ($elimino) {
            $this->showNotifiacation->mostrar("Se ha borrado la proforma de la base de datos","green");
        } else {
            $this->showNotifiacation->mostrar("Fallo al borrar proforma","red");
        }
    }

    public function mostrarProformasAModificar(){

        $traerTodasLasProformasRegistradas = $this->proformaModel->obtenerProformas();

        if ($traerTodasLasProformasRegistradas != null) {
            $this->data["mostrarListadoDeProformasAModificar"] = $traerTodasLasProformasRegistradas;
            echo $this->renderer->render("./view/supervisor/proforma/mostrarListadoDeProformasAModificarView.php", $this->data);
        } else {
            $this->showNotifiacation->mostrar("No hay proformas a modificar","red");
        }
    }

    public function mostrarDatosDeProformaAModificar(){
        $this->data["cargarSelectCliente"] = $this->proformaModel->traerTodosLosClientes();
        $this->data["cargarSelectChofer"] = $this->proformaModel->traerTodosLosChoferes();
        $this->data["cargarSelectArrastrado"] = $this->proformaModel->traerTodosLosArrastrados();
        $this->data["cargarSelectTractor"] = $this->proformaModel->traerTodosLosTractores();
        $idProforma = $_POST["id_proforma"];
        $registro = $this->proformaModel->obtenerProforma($idProforma);
        $this->data["mostrarDatosDeProformaAModificar"] = $registro;
        echo $this->renderer->render("./view/supervisor/proforma/mostrarDatosDeProformaAModificarView.php", $this->data);
    }

    public function modificarProforma(){

        $id_proforma = $_POST["id_proforma"];
        $id_tractor = $_POST["id_tractor"];
        $id_arrastrado = $_POST["id_arrastrado"];
        $id_cliente = $_POST["id_cliente"];
        $usuario = $_POST["chofer_asignado"];
        $fecha = $_POST["fecha"];
        $viaje_origen = $_POST["origen"];
        $viaje_destino = $_POST["destino"];
        $viaje_fecha_carga = $_POST["fecha_carga"];
        $viaje_ETA = $_POST["ETA"];
        $viaje_ETD = $_POST["ETD"];
        $carga_tipo = $_POST["carga_tipo"];
        $carga_peso = $_POST["peso_neto"];
        $carga_tipo_hazard = $_POST["tipo_hazard"];
        $carga_temperatura_reefer = $_POST["temperatura_reefer"];
        $costeo_km_estimados = $_POST["km_estimado"];
        $costeo_combustible_estimado = $_POST["combustible_estimado"];
        $costeo_viaticos_estimado = $_POST["viaticos_estimado"];
        $costeo_peajes_estimado = $_POST["peajes_estimado"];
        $costeo_pesajes_estimado = $_POST["pesajes_estimado"];
        $costeo_extras_estimado = $_POST["extras_estimado"];
        $costeo_hazard_estimado = $_POST["hazard_estimado"];
        $costeo_reefer_estimado = $_POST["reefer_estimado"];
        $costeo_fee_estimado = $_POST["fee_estimado"];

        $costeo_total_estimado =
            $costeo_km_estimados+
            $costeo_combustible_estimado+
            $costeo_viaticos_estimado+
            $costeo_peajes_estimado+
            $costeo_pesajes_estimado+
            $costeo_extras_estimado+
            $costeo_hazard_estimado+
            $costeo_reefer_estimado+
            $costeo_fee_estimado;


        $modifico = $this->proformaModel->modificar(
            $fecha,
            $id_cliente,
            $viaje_origen,
            $viaje_destino,
            $viaje_fecha_carga,
            $viaje_ETD,
            $viaje_ETA,
            $carga_tipo,
            $carga_peso,
            $carga_tipo_hazard,
            $carga_temperatura_reefer,
            $costeo_km_estimados,
            $costeo_combustible_estimado,
            $costeo_viaticos_estimado,
            $costeo_peajes_estimado,
            $costeo_pesajes_estimado,
            $costeo_extras_estimado,
            $costeo_hazard_estimado,
            $costeo_reefer_estimado,
            $costeo_fee_estimado,
            $usuario,
            $id_tractor,
            $id_arrastrado,
            $id_proforma,
            $costeo_total_estimado);



        if ($modifico) {
            $this->showNotifiacation->mostrar("Se modificado la proforma en la base de datos","green");
        } else {
            $this->showNotifiacation->mostrar("Fallo al modificar proforma","red");
        }
    }




    public function cerrarSesion()
    {
        session_destroy();
        echo $this->renderer->render("./view/loginView.php");

    }
}