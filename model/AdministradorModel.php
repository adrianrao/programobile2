<?php


class AdministradorModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function buscarUsuarioPorId($idUsuario){
        return $this->db->query("select * FROM empleado where id_usuario = '$idUsuario' ");
    }

    public function asignarRol($id_rol, $idUsuario){
        return $this->db->ejecutarQuery("UPDATE empleado SET id_rol = '$id_rol' WHERE id_usuario = '$idUsuario'");
    }

    public function deleteUsuario($idUsuario){
        return $this->db->ejecutarQuery("delete from empleado where id_usuario = '$idUsuario'");
    }

    public function traerTodosLosUsuariosSinRol(){
        return $this->db->query("select * FROM empleado e where e.id_rol IS null");
    }

    public function traerTodosLosUsuariosABorrar(){
        return $this->db->query("select * FROM empleado where id_rol <> 1 OR id_rol IS null ");
    }

    public function traerTodosLosUsuariosAModificar(){
        return $this->db->query("select * FROM empleado ");
    }

    public function modificarUnUsuario($idUsuario,$usuario,$dni,$f_nac,$id_rol){
        return $this->db->ejecutarQuery("UPDATE empleado SET usuario = '$usuario' , dni = $dni, f_nac = $f_nac, id_rol = '$id_rol' 
                                        WHERE id_usuario = '$idUsuario'");
    }

    public function traerTodosLosRoles(){
        return $this->db->query("select * FROM rol");
    }




    





}