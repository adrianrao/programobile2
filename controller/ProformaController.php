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
        echo $this->renderer->render("view/supervisor/supervisorView.php");
    }

    public function mostrarProformas(){
        $registros = $this->proformaModel->obtenerProformas();
        $this->data["mostrarListadoDeProformas"] = $registros;
        echo $this->renderer->render("./view/supervisor/proforma/mostrarListadoDeProformasView.php", $this->data);
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
        $id_arrastrado = $_POST["id_arrastrador"];
        $id_cliente = $_POST["id_cliente"];
        $usuario = $_POST["chofer_asignado"];
        $fecha = $_POST["fecha"];
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
        $costeo_viaticos_estimado = $_POST["viaticos_estimado"];
        $costeo_peajes_estimado = $_POST["peajes_estimado"];
        $costeo_pesajes_estimado = $_POST["pesajes_estimado"];
        $costeo_extras_estimado = $_POST["extras_estimado"];
        $costeo_hazard_estimado = $_POST["hazard_estimado"];
        $costeo_reefer_estimado = $_POST["reefer_estimado"];
        $costeo_fee_estimado = $_POST["fee_estimado"];


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
            $costeo_fee_estimado);

        if(isset($result)){
            $this->showNotifiacation->mostrar("Registro completado con éxito","green");
        }else{
            $this->showNotifiacation->mostrar("Error al registrar","red");
        }

    }

    public function mostrarProformasAEliminar(){
        $registros = $this->proformaModel->obtenerProformas();
        $this->data["mostrarListadoDeProformasAEliminar"] = $registros;
        echo $this->renderer->render("./view/supervisor/proforma/mostrarListadoDeProformasAEliminarView.php", $this->data);
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
        $registros = $this->proformaModel->obtenerProformas();
        $this->data["mostrarListadoDeProformasAModificar"] = $registros;
        echo $this->renderer->render("./view/supervisor/proforma/mostrarListadoDeProformasAModificarView.php", $this->data);
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

        $idProforma = $_POST["id_proforma"];
        $id_tractor = $_POST["id_tractor"];
        $id_arrastrado = $_POST["id_arrastrador"];
        $id_cliente = $_POST["id_cliente"];
        $usuario = $_POST["chofer_asignado"];
        $fecha = $_POST["fecha"];
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
        $costeo_viaticos_estimado = $_POST["viaticos_estimado"];
        $costeo_peajes_estimado = $_POST["peajes_estimado"];
        $costeo_pesajes_estimado = $_POST["pesajes_estimado"];
        $costeo_extras_estimado = $_POST["extras_estimado"];
        $costeo_hazard_estimado = $_POST["hazard_estimado"];
        $costeo_reefer_estimado = $_POST["reefer_estimado"];
        $costeo_fee_estimado = $_POST["fee_estimado"];

        $modifico = $this->proformaModel->modificar(
            $idProforma,
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
            $costeo_fee_estimado);



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