<?php


class ChoferModel
{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }



    public function cargarLicenciaYCelular($usuario,$tipoLicencia){

        return $this->database->ejecutarQuery("UPDATE empleado SET tipo_licencia = '$tipoLicencia' WHERE usuario = '$usuario'");


    }

    public function listarProformas($usuario){
        return $this->database->query(" select proforma.id_proforma, cliente.denominacion from proforma 
                                        JOIN cliente
                                        on proforma.id_cliente = cliente.id_cliente
                                        JOIN empleado
                                        on proforma.usuario = empleado.usuario
                                        where empleado.usuario = '$usuario'
                                        and proforma.estado = 'pendiente';");
    }

    public function listarTodasLasProformasModificar($usuario){
        return $this->database->query(" select proforma.id_proforma, cliente.denominacion from proforma 
                                        JOIN cliente
                                        on proforma.id_cliente = cliente.id_cliente
                                        JOIN empleado
                                        on proforma.usuario = empleado.usuario
                                        where empleado.usuario = '$usuario'");

    }

    public function encontrarProformaPorId($idProforma){
        return $this->database->query("SELECT * FROM `proforma` 
                                        JOIN cliente 
                                        on proforma.id_cliente = cliente.id_cliente
                                        JOIN empleado
                                        on proforma.usuario = empleado.usuario
                                        WHERE proforma.id_proforma = $idProforma");
                                            }

    public function insertarDatosDelViajeEnBD($id_proforma,
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
                                              $costeo_fee_real){

                        $costeo_total_real =  $costeo_km_reales+
                                              $costeo_combustible_real+
                                              $costeo_ETD_real+
                                              $costeo_ETA_real+
                                              $costeo_viaticos_real+
                                              $costeo_peajes_real+
                                              $costeo_pesajes_real+
                                              $costeo_extras_real+
                                              $costeo_hazard_real+
                                              $costeo_reefer_real+
                                              $costeo_fee_real;

        return $this->database->ejecutarQuery("UPDATE proforma p SET 
                                                p.costeo_km_reales = $costeo_km_reales,
                                                p.costeo_combustible_real = $costeo_combustible_real,
                                                p.costeo_ETD_real = $costeo_ETD_real,
                                                p.costeo_ETA_real = $costeo_ETA_real,
                                                p.costeo_viaticos_real = $costeo_viaticos_real,
                                                p.costeo_peajes_Real = $costeo_peajes_real,
                                                p.costeo_pesajes_real = $costeo_pesajes_real,
                                                p.costeo_extras_real = $costeo_extras_real,
                                                p.costeo_hazard_real = $costeo_hazard_real,
                                                p.costeo_reefer_real = $costeo_reefer_real,
                                                p.costeo_fee_real = $costeo_fee_real,
                                                p.estado = 'Finalizado',
                                                p.costeo_total_real = $costeo_total_real
                                                where p.id_proforma = $id_proforma;");
    }


}