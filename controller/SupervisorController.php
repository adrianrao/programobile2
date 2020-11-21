<?php


class SupervisorController
{
    private $supervisorModel;
    private $renderer;


    public function __construct($supervisorModel, $renderer)
    {

        if (isset($_SESSION["rol"])) {
            if ($_SESSION["rol"] == "supervisor") {
                $this->supervisorModel = $supervisorModel;
                $this->renderer = $renderer;
            } else {
                session_destroy();
                $this->renderer = $renderer;
                echo $this->renderer->render("view/loginView.php");
                exit();
            }
        } else {
            session_destroy();
            $this->renderer = $renderer;
            echo $this->renderer->render("view/loginView.php");
            exit();
        }


    }

    public function index()
    {

        echo $this->renderer->render("view/supervisorView.php");
    }


    public function darAltaACliente()
    {
        $data["formAltaDeCliente"] = "Habilitado";
        echo $this->renderer->render("./view/supervisorView.php", $data);
    }

    public function procesarFormulario()
    {

    }


    public function cerrarSesion()
    {
        session_destroy();
        echo $this->renderer->render("./view/loginView.php");

    }
}