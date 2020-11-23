<?php


class SupervisorModel
{
    private $db;

    public function __construct($database){
        $this->db = $database;
    }

    public function registrarCliente($email, $telefono, $contacto1, $contacto2, $cuit,$denominacion,$calle,$nro, $codigoPostal){
        $result = $this->db->ejecutarQuery(
            "insert into cliente(email,telefono,contacto1,contacto2,cuit, denominacion, direccion_calle, direccion_nro, direccion_cp) 
                        VALUES('$email', '$telefono', '$contacto1', '$contacto2', '$cuit','$denominacion','$calle', '$nro', '$codigoPostal')"
        );
        return $result;
    }

    public function eliminarClientePorId($idCliente){
        $result = $this->db->ejecutarQuery("delete from cliente where cliente.id_cliente = $idCliente");
        return $result;
    }

    public function buscarClientePorId($id_cliente){
        return $this->db->query("select * from cliente where cliente.id_cliente = $id_cliente");

    }

    public function modificarCliente
    ($idCliente, $email, $telefono, $contacto1, $contacto2, $cuit, $denominacion, $direccion_calle, $direccion_nro, $direccion_cp){

        return $this->db->ejecutarQuery("
                            UPDATE cliente SET
                            email = '$email' ,
                            telefono = '$telefono',
                            contacto1 = '$contacto1', 
                            contacto2 = '$contacto2',
                            cuit = '$cuit',
                            denominacion = '$denominacion',
                            direccion_calle = '$direccion_calle',
                            direccion_nro = '$direccion_nro',
                            direccion_cp = '$direccion_cp'
                            WHERE cliente.id_cliente = $idCliente"
                            );
    }

    public function listarClientes(){
        return $this->db->query("SELECT * FROM cliente");
    }



    public function clienteYaRegistrado($id_cliente)
    {
        $this->db->ejecutarQuery("SELECT * FROM cliente WHERE id_cliente = $id_cliente");


    }


}