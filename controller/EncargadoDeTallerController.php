<?php


class EncargadoDeTallerController
{

    private $encargadoDeTallerModel;
    private $renderer;


    public function __construct($encargadoDeTallerModel, $renderer)
    {
        if(RoleValidation::validarRol("encargadoDeTaller")){
            $this->encargadoDeTallerModel = $encargadoDeTallerModel;
            $this->renderer = $renderer;
        }else{
            RoleValidation::logoutPorRolNoValido($renderer);
        }
    }


    public function index()
    {
        echo $this->renderer->render("view/encargadoDeTallerView.php");
    }

    public function mostrarFormularioAltaDeService(){


        $data["formularioAltaDeService"] = "habilitado";
        $data["cargarSelectTractor"] = $this->encargadoDeTallerModel->traerTodosLosTractores();
        $data["cargarSelectMecanico"] = $this->encargadoDeTallerModel->traerTodosLosMecanicos();



        echo $this->renderer->render("./view/encargadoDeTallerView.php", $data);




    }

    public function procesarService(){

        $costo = $_POST["costo"];
        $descripcion = $_POST["descripcion"];
        $fecha = $_POST["fecha"];
        $repuesto_utilizado = $_POST["repuesto_utilizado"];
        $id_tractor = $_POST["id_tractor"];
        $id_mecanico = $_POST["id_mecanico"];
        $km_unidad = $_POST["km_unidad"];
        $tipo_service = $_POST["tipo_service"];




        $result = $this->encargadoDeTallerModel->cargarServiceEnBD(
            $costo,
            $descripcion,
            $fecha,
            $repuesto_utilizado,
            $id_tractor,
            $id_mecanico,
            $km_unidad,
            $tipo_service);

        if ($result) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Se cargo el service correctamente";
        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Error al cargar el service";
        }

        echo $this->renderer->render("./view/encargadoDeTallerView.php", $data);


    }

    public function mostrarFormularioModificarService(){




        $data["formularioAltaDeService"] = "habilitado";
        $data["cargarSelectTractor"] = $this->encargadoDeTallerModel->traerTodosLosTractores();
        $data["cargarSelectMecanico"] = $this->encargadoDeTallerModel->traerTodosLosMecanicos();




        echo $this->renderer->render("./view/encargadoDeTallerView.php", $data);


    }

    public function traerPosiblesServiceAModificar(){



        $data["traerPosiblesServiceAModificar"] = $this->encargadoDeTallerModel->traerTodosLosService();

        echo $this->renderer->render("./view/encargadoDeTallerView.php", $data);
    }

    public function verDetalleService(){

        $id_service = $_POST["id_service"];

        $data["cargarSelectTractor"] = $this->encargadoDeTallerModel->traerTodosLosTractores();
        $data["cargarSelectMecanico"] = $this->encargadoDeTallerModel->traerTodosLosMecanicos();
        $data["modificarServiceConcreto"] = $this->encargadoDeTallerModel->buscarServicePorId($id_service);

        echo $this->renderer->render("./view/encargadoDeTallerView.php", $data);

    }

    public function modificarService(){

        $id_service = $_POST["id_service"];
        $costo = $_POST["costo"];
        $descripcion = $_POST["descripcion"];
        $fecha = $_POST["fecha"];
        $repuesto_utilizado = $_POST["repuesto_utilizado"];
        $id_tractor = $_POST["id_tractor"];
        $id_mecanico = $_POST["id_mecanico"];
        $km_unidad = $_POST["km_unidad"];
        $tipo_service = $_POST["tipo_service"];

        $result = $this->encargadoDeTallerModel->modificarService(
            $id_service,
            $costo,
            $descripcion,
            $fecha,
            $repuesto_utilizado,
            $id_tractor,
            $id_mecanico,
            $km_unidad,
            $tipo_service);

        if ($result) {
            $data["colorNotificacion"] = "green";
            $data["notificacion"] = "Se cargo el service correctamente";
        } else {
            $data["colorNotificacion"] = "red";
            $data["notificacion"] = "Error al cargar el service";
        }

        echo $this->renderer->render("./view/encargadoDeTallerView.php",$data);


    }
    public function cerrarSesion()
    {
        session_destroy();
        echo $this->renderer->render("./view/loginView.php");

    }

}

