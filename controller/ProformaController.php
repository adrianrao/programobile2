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

    #region Formulario
    public function mostrarFormularioProforma(){
        $this->data["cargarSelectCliente"] = $this->proformaModel->traerTodosLosClientes();
        $this->data["cargarSelectChofer"] = $this->proformaModel->traerTodosLosChoferes();
        echo $this->renderer->render("./view/supervisor/proforma/mostrarFormularioAltaDeProformaView.php", $this->data);
    }

    public function procesarProforma(){

        $id_tractor = $_POST["id_tractor"];
        $id_arrastrado = $_POST["id_arrastrador"];
        $id_cliente = 1;
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


        $result = $this->proformaModel->registrarProforma(
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
            $this->showNotifiacation->mostrar("Registro completado con éxito","green");
        }else{
            $this->showNotifiacation->mostrar("Error al registrar","red");
        }

    }

    public function obtenerDatos(){
        $idProforma = $_POST["id_proforma"];
        $registro = $this->proformaModel->obtenerProforma($idProforma);

        $this->data["formulario"] = $registro;
        $this->data["actualizacion"] = true;
        echo $this->renderer->render("./view/supervisor/proforma/formularioView.php", $this->data);
    }

    public function mostrarDetalle(){
        $idProforma = $_POST["id_proforma"];
        $registro = $this->proformaModel->obtenerProforma($idProforma);

        $this->data["formulario"] = $registro;
        $this->data["detalle"] = $registro;
        echo $this->renderer->render("./view/supervisor/proforma/formularioView.php", $this->data);
    }
    #endregion

    #region Listado
    public function mostrarProformas(){
        $registros = $this->proformaModel->obtenerProformas();

        $this->data["listado"] = $registros;
        $this->data["detalle"] = true;
        echo $this->renderer->render("./view/supervisor/proforma/listadoView.php", $this->data);

    }
    public function mostrarProformasAModificar(){
        $registros = $this->proformaModel->obtenerProformas();

        $this->data["listado"] = $registros;
        $this->data["modificar"] = true;
        echo $this->renderer->render("./view/supervisor/proforma/listadoView.php", $this->data);

    }

    public function mostrarProformasAEliminar(){
        $registros = $this->proformaModel->obtenerProformas();

        $this->data["listado"] = $registros;
        $this->data["eliminar"] = true;
        echo $this->renderer->render("./view/supervisor/proforma/listadoView.php", $this->data);

    }
    #endregion


    public function eliminar(){
        $idProforma = $_POST["id_proforma"];
        $elimino = $this->proformaModel->eliminar($idProforma);
        
        if ($elimino) {
            $this->data["colorNotificacion"] = "green";
            $this->data["notificacion"] = "Se ha borrado la proforma de la base de datos";
        } else {
            $this->data["colorNotificacion"] = "red";
            $this->data["notificacion"] = "Fallo al borrar proforma";
        }
        echo $this->renderer->render("./view/supervisor/supervisorView.php", $this->data);
    }

    public function cerrarSesion()
    {
        session_destroy();
        echo $this->renderer->render("./view/loginView.php");

    }
}