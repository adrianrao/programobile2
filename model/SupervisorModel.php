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

    public function clienteYaRegistrado($cuit)
    {
         $result = $this->db->ejecutarQuery("SELECT * FROM cliente WHERE cuit = '$cuit'");

        return mysqli_num_rows($result);

    }










    public function buscarArrastradoPorId($idArrastrado){
        return $this->db->query("select * from arrastrado where arrastrado.id_arrastrado = $idArrastrado");
    }

    public function registrarArrastrado($numeroDeChasis, $patente){
        $result = $this->db->ejecutarQuery(
            "insert into arrastrado(nro_chasis,patente) 
                        VALUES('$numeroDeChasis', '$patente')"
        );
        return $result;
    }

    public function arrastradoYaRegistrado($patente)
    {
        $result = $this->db->ejecutarQuery("SELECT * FROM arrastrado WHERE patente = '$patente'");

        return mysqli_num_rows($result);
    }

    public function eliminarArrastrado($idArrastrado){
        $result = $this->db->ejecutarQuery("delete from arrastrado where arrastrado.id_arrastrado  = $idArrastrado");
        return $result;
    }

    public function listarArrastrados(){
        return $this->db->query("SELECT * FROM arrastrado");
    }

    public function modificarArrastrado($idArrastrado,$numeroDeChasis, $patente){

        return $this->db->ejecutarQuery("
                            UPDATE arrastrado SET
                            nro_chasis = '$numeroDeChasis' ,
                            patente = '$patente'
                            WHERE arrastrado.id_arrastrado = $idArrastrado"
        );
    }













    public function buscarTractorPorId($idTractor){
        return $this->db->query("select * from tractor where tractor.id_tractor = $idTractor");
    }

    public function registrarTractor($anioFabricacion, $nroMotor, $nroChasis, $marca, $modelo,$patente,$kilometraje){
        $result = $this->db->ejecutarQuery(
            "insert into tractor(año_fabricacion,nro_motor,nro_chasis,marca,modelo, patente, kilometraje) 
                        VALUES( STR_TO_DATE('$anioFabricacion', '%Y-%m-%d'), '$nroMotor', '$nroChasis', '$marca', '$modelo','$patente',$kilometraje)"
        );
        return $result;
    }

    public function tractorYaRegistrado($patente)
    {
        $result = $this->db->ejecutarQuery("SELECT * FROM tractor WHERE patente = '$patente'");

        return mysqli_num_rows($result);
    }

    public function eliminarTractor($idTractor){
        $result = $this->db->ejecutarQuery("delete from tractor where tractor.id_tractor   = $idTractor");
        return $result;
    }

    public function listarTractores(){
        return $this->db->query("SELECT * FROM tractor");
    }

    public function modificarTractor($idTractor,$anioFabricacion, $nroMotor, $nroChasis, $marca, $modelo,$patente,$kilometraje){

        return $this->db->ejecutarQuery("
                            UPDATE tractor SET
                            año_fabricacion = STR_TO_DATE('$anioFabricacion', '%Y-%m-%d') ,
                            nro_motor = '$nroMotor',
                            nro_chasis = '$nroChasis', 
                            marca = '$marca',
                            modelo = '$modelo',
                            patente = '$patente',
                            kilometraje = '$kilometraje'
                            WHERE tractor.id_tractor= $idTractor"
        );
    }


}