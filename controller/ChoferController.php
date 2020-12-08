<?php


class ChoferController
{
    private $choferModel;
    private $renderer;
    private $data;
    private $showNotifiacation;


    public function __construct($choferModel, $renderer)
    {
        if(RoleValidation::validarRol("chofer")){
            $this->choferModel = $choferModel;
            $this->renderer = $renderer;
            $this->data["chofer"] = true;
            $this->showNotifiacation = new ShowNotification($renderer,"chofer" );
        }else{
            RoleValidation::logoutPorRolNoValido($renderer);
        }
    }

    public function index()
    {
        $usuario = $_SESSION["usuario"];
        $rolDeUsuario = $_SESSION["rol"];


        if(!$this->choferModel->validarSiELUsuarioEsChoferYSiTodosLosDatosEstanCargados($usuario,$rolDeUsuario)){

            $informacionDeChofer =$this->choferModel->buscarInformacionDeChofer($usuario);


            $this->data["faltaValidarLicenciaYORegistro"] = $informacionDeChofer;

            echo $this->renderer->render("view/chofer/choferSinDatosValidadosView.php", $this->data);
            exit();

        }

        echo $this->renderer->render("view/chofer/choferView.php",$this->data);
    }


    public function mostrarLasPosiblesProformasACargar(){

        $usuario = $_SESSION["usuario"];
        $traerTodasLasProformasPosiblesACargar = $this->choferModel->listarProformas($usuario);


        if ($traerTodasLasProformasPosiblesACargar != null) {
            $this->data["listadoDeProformas"] = $traerTodasLasProformasPosiblesACargar;
            echo $this->renderer->render("view/chofer/listadoDeProformasView.php", $this->data);
        } else {
            $this->showNotifiacation->mostrar("No hay Proformas a cargar","red");
        }
    }

    public function modificarProformaConcreta()
    {
        $id_proforma = $_POST["id_proforma"];

        $this->data["mostrarFormularioCargaDeDatosDelViaje"] = $this->choferModel->encontrarProformaPorId($id_proforma);

        $costoCombustible = $this->choferModel->obtenerTotalCargaCombustible($id_proforma);

        $this->data["costo_combustible_real"] = $costoCombustible;

        echo $this->renderer->render("view/chofer/mostrarFormularioCargaDeDatosDelViajeView.php", $this->data);
    }

    public function procesarDatosDeViaje(){

        $id_proforma = $_POST["id_proforma"];

        $costeo_km_reales = $_POST["costeo_km_reales"];
        $costeo_combustible_real = $_POST["costeo_combustible_real"];
        $fecha_partida_real = $_POST["fecha_partida_real"];
        $fecha_arribo_real = $_POST["fecha_arribo_real"];
        $costeo_viaticos_real = $_POST["costeo_viaticos_real"];
        $costeo_peajes_real = $_POST["costeo_peajes_real"];
        $costeo_pesajes_real = $_POST["costeo_pesajes_real"];
        $costeo_extras_real = $_POST["costeo_extras_real"];
        $costeo_hazard_real = $_POST["costeo_hazard_real"];
        $costeo_reefer_real = $_POST["costeo_reefer_real"];
        $costeo_fee_real = $_POST["costeo_fee_real"];

        $result = $this->choferModel->insertarDatosDelViajeEnBD(
            $id_proforma,
            $costeo_km_reales,
            $costeo_combustible_real,
            $fecha_partida_real,
            $fecha_arribo_real,
            $costeo_viaticos_real,
            $costeo_peajes_real,
            $costeo_pesajes_real,
            $costeo_extras_real,
            $costeo_hazard_real,
            $costeo_reefer_real,
            $costeo_fee_real);



            if ($result) {
                $this->showNotifiacation->mostrar("Modificacion Exitosa","green");
            } else {
                $this->showNotifiacation->mostrar("Fallo la modificacion","red");
            }

    }

    public function listarTodasLasProformasModificar(){

        $usuario = $_SESSION["usuario"];
        $traerTodasLasProformasModificar = $this->choferModel->listarTodasLasProformasModificar($usuario);

        if ($traerTodasLasProformasModificar != null) {
            $this->data["listarTodasLasProformasModificar"] = $traerTodasLasProformasModificar;
            echo $this->renderer->render("view/chofer/listarTodasLasProformasModificarView.php", $this->data);
        } else {
            $this->showNotifiacation->mostrar("No hay Proformas a modificar","red");
        }

    }


    public function verDetalleDeProformaConcretaAModificar(){

        $idProforma = $_POST["id_proforma"];

        $this->data["verDetalleDeProformaConcretaAModificar"] = $this->choferModel->encontrarProformaPorId($idProforma);

        echo $this->renderer->render("view/chofer/verDetalleDeProformaConcretaAModificarView.php", $this->data);


    }

    public function corregirProformaEnBD(){

        $this->procesarDatosDeViaje();


    }

    public function cerrarSesion()
    {
        session_destroy();
        echo $this->renderer->render("./view/loginView.php");

    }


}