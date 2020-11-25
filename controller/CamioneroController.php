<?php


class CamioneroController
{
    private $camioneroModel;
    private $renderer;


    public function __construct($camioneroModel, $renderer)
    {
        if(RoleValidation::validarRol("supervisor")){
            $this->camioneroModel = $camioneroModel;
            $this->renderer = $renderer;
        }else{
            RoleValidation::logoutPorRolNoValido($renderer);
        }
    }

    public function index()
    {
        echo $this->renderer->render("view/camioneroView.php");
    }
}