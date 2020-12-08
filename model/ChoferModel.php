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
                                              $fecha_partida_real,
                                              $fecha_arribo_real,
                                              $costeo_viaticos_real,
                                              $costeo_peajes_real,
                                              $costeo_pesajes_real,
                                              $costeo_extras_real,
                                              $costeo_hazard_real,
                                              $costeo_reefer_real,
                                              $costeo_fee_real){

                        $costeo_total_real =  $costeo_km_reales+
                                              $costeo_combustible_real+
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
                                                p.fecha_partida_real = STR_TO_DATE('$fecha_partida_real', '%Y-%m-%d'),
                                                p.fecha_arribo_real = STR_TO_DATE('$fecha_arribo_real', '%Y-%m-%d'),
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

    public function buscarInformacionDeChofer($usuario){
        return $this->database->query("SELECT * FROM empleado LEFT JOIN rol ON empleado.id_rol = rol.id_rol LEFT JOIN celular on empleado.usuario = celular.id_chofer LEFT JOIN tipo_de_licencia on empleado.tipo_licencia = tipo_de_licencia.id_tipo_licencia WHERE usuario = '$usuario'");
    }


    public function validarSiELUsuarioEsChoferYSiTodosLosDatosEstanCargados($usuario,$rolDeUsuario){
        $esChoferConDatosValidados = true;

        if($rolDeUsuario == "chofer"){
            $esChoferConDatosValidados= $this->validaSiElChoferTieneTodosLosDatosCargados($usuario);
        }

        return $esChoferConDatosValidados;
    }

    public function obtenerTotalCargaCombustible($idProforma){
        return $this->database->executeQuery("SELECT sum(importe) as importe from carga_combustible where id_proforma = $idProforma ");
    }

    public function realizarCargaDeCombustible($idPorforma,$cantidadLitros,$importe,$lugar){

       return $this->database->ejecutarQuery("insert into 
                                    carga_combustible(`cantidad_litros`,`importe`,`lugar`,`id_proforma`)
                                                VALUES($cantidadLitros,$importe,'$lugar',$idPorforma");

    }

    private function validaSiElChoferTieneTodosLosDatosCargados($usuario){

        $losDatosEstanCargados = false;

        $informacionDeChofer = $this->buscarInformacionDeChofer($usuario);

        if($informacionDeChofer[0]["nro"] == null || $informacionDeChofer[0]["tipo_licencia"] == null){

            $losDatosEstanCargados = false;

        }else{

            $losDatosEstanCargados = true;
        }
        return $losDatosEstanCargados;
    }


}