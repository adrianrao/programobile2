<?php


class ChoferController
{
    private $choferModel;
    private $renderer;


    public function __construct($choferModel, $renderer)
    {
        if(RoleValidation::validarRol("chofer")){
            $this->choferModel = $choferModel;
            $this->renderer = $renderer;
        }else{
            RoleValidation::logoutPorRolNoValido($renderer);
        }
    }

    public function index()
    {
        echo $this->renderer->render("view/choferView.php");
    }

    public function mostrarLasPosiblesProformasACargar(){

        $usuario = $_SESSION["usuarioChofer"];

        $data["listadoDeProformas"] = $this->choferModel->listarProformas($usuario);

        echo $this->renderer->render("view/choferView.php", $data);


    }

    public function modificarProformaConcreta()
    {

        $id_proforma = $_POST["id_proforma"];

        $data["mostrarFormularioCargaDeDatosDelViaje"] = $this->choferModel->encontrarProformaPorId($id_proforma);

        echo $this->renderer->render("view/choferView.php", $data);
    }

    public function procesarDatosDeViaje(){

        $id_proforma = $_POST["id_proforma"];

        $costeo_km_reales = $_POST["costeo_km_reales"];
        $costeo_combustible_real = $_POST["costeo_combustible_real"];
        $costeo_ETD_real = $_POST["costeo_ETD_real"];
        $costeo_ETA_real = $_POST["costeo_ETA_real"];
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
            $costeo_ETD_real,
            $costeo_ETA_real,
            $costeo_viaticos_real,
            $costeo_peajes_real,
            $costeo_pesajes_real,
            $costeo_extras_real,
            $costeo_hazard_real,
            $costeo_reefer_real,
            $costeo_fee_real);



            if ($result) {
                $data["colorNotificacion"] = "green";
                $data["notificacion"] = "Modificacion Exitosa";
            } else {
                $data["colorNotificacion"] = "red";
                $data["notificacion"] = "Fallo la modificacion";
            }

            echo $this->renderer->render("view/choferView.php", $data);

    }

    public function listarTodasLasProformasModificar(){

            $usuario = $_SESSION["usuarioChofer"];

            $data["listarTodasLasProformasModificar"] = $this->choferModel->listarTodasLasProformasModificar($usuario);

            echo $this->renderer->render("view/choferView.php", $data);


    }


    public function verDetalleDeProformaConcretaAModificar(){

        $idProforma = $_POST["id_proforma"];

        $data["verDetalleDeProformaConcretaAModificar"] = $this->choferModel->encontrarProformaPorId($idProforma);

        echo $this->renderer->render("view/choferView.php", $data);


    }

    public function corregirProformaEnBD(){

        $this->procesarDatosDeViaje();


    }


}