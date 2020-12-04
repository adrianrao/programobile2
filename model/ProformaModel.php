<?php


class ProformaModel
{
    private $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function registrar($id_tractor, $id_arrastrado, $id_cliente, $usuario, $fecha, $cliente_denominacion,
                              $cliente_cuit, $cliente_direccion, $cliente_telefono, $cliente_email, $cliente_contacto1, $cliente_contacto2, $viaje_origen,
                              $viaje_destino, $viaje_fecha_carga, $viaje_ETA, $carga_tipo, $carga_peso, $carga_tipo_hazard, $carga_temperatura_reefer, $costeo_km_estimados,
                              $costeo_combustible_estimado, $costeo_ETD_estimado, $costeo_ETA_estimado, $costeo_viaticos_estimado,
                              $costeo_peajes_estimado, $costeo_pesajes_estimado, $costeo_extras_estimado, $costeo_hazard_estimado, $costeo_reefer_estimado, $costeo_fee_estimado)
    {

        $sql = " INSERT INTO proforma ";
        $sql .= "(`id_tractor`,`id_arrastrado`,`id_cliente`,`usuario`,`fecha`,`cliente_denominacion`,`cliente_cuit`,`cliente_direccion`,";
        $sql .= "`cliente_telefono`,`cliente_email`,`cliente_contacto1`,`cliente_contacto2`,`viaje_origen`,`viaje_destino`,`viaje_fecha_carga`,`viaje_ETA`,";
        $sql .= "`carga_tipo`,`carga_peso`,`carga_tipo_hazard`,`carga_temperatura_reefer`,`costeo_km_estimados`,`costeo_combustible_estimado`,`costeo_ETD_estimado`,`costeo_ETA_estimado`,`costeo_viaticos_estimado`,`costeo_peajes_estimado`,";
        $sql .= "`costeo_pesajes_estimado`,`costeo_extras_estimado`,`costeo_hazard_estimado`,`costeo_reefer_estimado`,`costeo_fee_estimado`)";
        $sql .= " VALUES ";

        $sql .= "$id_tractor,$id_arrastrado,$id_cliente,'$usuario',STR_TO_DATE('$fecha', '%Y-%m-%d'),'$cliente_denominacion','$cliente_cuit','$cliente_direccion','$cliente_telefono',";
        $sql .= "'$cliente_email','$cliente_contacto1','$cliente_contacto2','$viaje_origen','$viaje_destino',STR_TO_DATE('$viaje_fecha_carga', '%Y-%m-%d'),'$viaje_ETA','$carga_tipo',$carga_peso,'$carga_tipo_hazard',";
        $sql .= "'$carga_temperatura_reefer', $costeo_km_estimados,$costeo_combustible_estimado,$costeo_ETD_estimado,$costeo_ETA_estimado,$costeo_viaticos_estimado,$costeo_peajes_estimado,$costeo_pesajes_estimado,$costeo_extras_estimado,$costeo_hazard_estimado,$costeo_reefer_estimado,$costeo_fee_estimado)";

        return $this->db->executeQuery($sql);
    }

    public function modificar($id_proforma, $id_tractor, $id_arrastrado, $id_cliente, $usuario, $fecha, $cliente_denominacion,
                              $cliente_cuit, $cliente_direccion, $cliente_telefono, $cliente_email, $cliente_contacto1, $cliente_contacto2, $viaje_origen,
                              $viaje_destino, $viaje_fecha_carga, $viaje_ETA, $carga_tipo, $carga_peso, $carga_tipo_hazard, $carga_temperatura_reefer, $costeo_km_estimados,
                              $costeo_combustible_estimado, $costeo_ETD_estimado, $costeo_ETA_estimado, $costeo_viaticos_estimado,
                              $costeo_peajes_estimado, $costeo_pesajes_estimado, $costeo_extras_estimado, $costeo_hazard_estimado, $costeo_reefer_estimado, $costeo_fee_estimado)
    {

        $sql = "UPDATE proforma SET ";
        $sql .= "id_tractor = $id_tractor,";
        $sql .= "id_arrastrado = $id_arrastrado,";
        $sql .= "id_cliente = $id_cliente,";
        $sql .= "usuario = '$usuario',";
        $sql .= "fecha = STR_TO_DATE('$fecha', '%Y-%m-%d'),";
        $sql .= "cliente_denominacion = '$cliente_denominacion',";
        $sql .= "cliente_cuit = '$cliente_cuit',";
        $sql .= "cliente_direccion = '$cliente_direccion',";
        $sql .= "cliente_telefono = '$cliente_telefono',";
        $sql .= "cliente_email = '$cliente_email',";
        $sql .= "cliente_contacto1 = '$cliente_contacto1',";
        $sql .= "cliente_contacto2 = '$cliente_contacto2',";
        $sql .= "viaje_origen = '$viaje_origen',";
        $sql .= "viaje_destino = '$viaje_destino',";
        $sql .= "viaje_fecha_carga = STR_TO_DATE('$viaje_fecha_carga', '%Y-%m-%d'),";
        $sql .= "viaje_ETA = '$viaje_ETA',";
        $sql .= "carga_tipo = '$carga_tipo',";
        $sql .= "carga_peso = $carga_peso,";
        $sql .= "carga_tipo_hazard = '$carga_tipo_hazard',";
        $sql .= "carga_temperatura_reefer = '$carga_temperatura_reefer',";
        $sql .= "costeo_km_estimados = $costeo_km_estimados,";
        $sql .= "costeo_combustible_estimado = $costeo_combustible_estimado,";
        $sql .= "costeo_ETD_estimado = $costeo_ETD_estimado,";
        $sql .= "costeo_ETA_estimado = $costeo_ETA_estimado,";
        $sql .= "costeo_viaticos_estimado = $costeo_viaticos_estimado,";
        $sql .= "costeo_peajes_estimado = $costeo_peajes_estimado,";
        $sql .= "costeo_pesajes_estimado = $costeo_pesajes_estimado,";
        $sql .= "costeo_extras_estimado = $costeo_extras_estimado,";
        $sql .= "costeo_hazard_estimado = $costeo_hazard_estimado,";
        $sql .= "costeo_reefer_estimado = $costeo_reefer_estimado,";
        $sql .= "costeo_fee_estimado = $costeo_fee_estimado";
        $sql .= " WHERE id_proforma = $id_proforma";

        $this->db->executeQuery($sql);
    }

    public function eliminar($id_proforma)
    {
        $sql = "DELETE FROM proforma WHERE id_proforma = $id_proforma";
        return $this->db->executeQuery($sql);
    }

    public function obtenerCabecera($id_proforma){
        $sql = "SELECT id_proforma , cliente_denominacion , viaje_origen , viaje_destino , fecha FROM proforma";
        return $this->db->executeQuery($sql);
    }

    public function obtenerProformas(){
        $sql = "SELECT * FROM proforma";
        return $this->db->executeQuery($sql);
    }
}