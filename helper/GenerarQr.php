<?php
include_once("third-party/phpqrcode/qrlib.php");

class GenerarQr
{

    public static function generarCodigoQR($idProforma){

         QRcode::png("localhost/chofer/mostrarFormularioCargaCombustible?id_proforma=".$idProforma);

    }
}