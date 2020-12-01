{{> header}}
<style>
    body{
        background-color: #b0a9a9;
        color: #fff;
    }
    .login{
        margin-top: 100px;
    }
    .login .card{
        background: rgba(0,0,0,.6);
    }
    .login label{
        font-size: 16px;
        color:#ccc;
    }
    .login input{
        font-size: 22px !important;
    }
    .login button:hover{
        padding: 0px 40px;
    }
    .login p{
        margin-top: 1em;
    }
</style>



<nav >
    <div style="padding: 0 10px !important" class="nav-wrapper black">
        <a href="#" class="brand-logo">Chofer</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a  class="btn red darken-2" href="/administrador/cerrarSesion">Cerrar sesión</a></li>
            <li><a  class="btn red darken-2" href="/chofer/mostrarLasPosiblesProformasACargar">Listar viajes</a></li>
            <li><a  class="btn red darken-2" href="/chofer/listarTodasLasProformasModificar">Modificar viaje </a></li>
        </ul>
    </div>
</nav>
</header>

{{#verDetalleDeProformaConcretaAModificar}}

<div class="row login">
    <div class="col s12 m6 offset-m3">
        <div class="card">
            <div class="card-action gray accent-4 orange-text">
                <h3>Corregir proforma</h3>
            </div>
            <form method="POST" action="/chofer/corregirProformaEnBD">

                <br>

                <label>Nro proforma:</label>
                <input readonly="readonly" type="text" value="{{id_proforma}}" id="id_proforma" name="id_proforma" class="white-text" required>

                <br>

                <label>Cliente:</label>
                <input readonly="readonly" type="text" value="{{denominacion}}" id="denominacion" name="denominacion" class="white-text" required>



                <br>

                <label for="usuario">Chofer:</label>
                <input readonly="readonly" type="text" value="{{usuario}}" id="usuario" name="usuario" class="white-text" required>

                <br><br><br>

                <label for="costeo_km_reales">Km reales:</label>
                <input type="number" value="{{costeo_km_reales}}" id="costeo_km_reales" name="costeo_km_reales" class="white-text" required>



                <br>

                <label for="costeo_combustible_real">Combustible real:</label>
                <input type="number" value="{{costeo_combustible_real}}" id="costeo_combustible_real" name="costeo_combustible_real" class="white-text" required>

                <br>

                <label for="costeo_ETD_real">ETD real:</label>
                <input type="number" value="{{costeo_ETD_real}}" id="costeo_ETD_real" name="costeo_ETD_real" class="white-text" required>

                <br>

                <label for="costeo_ETA_real">ETA real:</label>
                <input type="number" value="{{costeo_ETA_real}}" id="costeo_ETA_real" name="costeo_ETA_real" class="white-text" required>

                <br>

                <label for="costeo_viaticos_real">Viaticos real:</label>
                <input type="number" value="{{costeo_viaticos_real}}" id="costeo_viaticos_real" name="costeo_viaticos_real" class="white-text" required>

                <br>

                <label for="costeo_peajes_real">Peajes real:</label>
                <input type="number" value="{{costeo_peajes_real}}" id="costeo_peajes_real" name="costeo_peajes_real" class="white-text" required>

                <br>

                <label for="costeo_pesajes_real">Pesajes real:</label>
                <input type="number"  value="{{costeo_pesajes_real}}" id="costeo_pesajes_real" name="costeo_pesajes_real" class="white-text" required>

                <br>

                <label for="costeo_extras_real">Extras real:</label>
                <input type="number" value="{{costeo_extras_real}}" id="costeo_extras_real" name="costeo_extras_real" class="white-text" required>

                <br>

                <label for="costeo_hazard_real">Hazard real:</label>
                <input type="number" value="{{costeo_hazard_real}}" id="costeo_hazard_real" name="costeo_hazard_real" class="white-text" required>

                <br>

                <label for="costeo_reefer_real">Reefer real:</label>
                <input type="number" value="{{costeo_reefer_real}}" id="costeo_reefer_real" name="costeo_reefer_real" class="white-text" required>

                <br>

                <label for="costeo_fee_real">Fee real:</label>
                <input type="number" value="{{costeo_reefer_real}}" id="costeo_fee_real" name="costeo_fee_real" class="white-text" required>



                <button type="submit" class="btn-large black accent-4">Modificar</button>
            </form>

        </div><br>


    </div>
</div>

{{/verDetalleDeProformaConcretaAModificar}}




{{#listarTodasLasProformasModificar}}

<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Denominacion: {{denominacion}}</span>
                    <p><strong>Id viaje:</strong> {{id_proforma}}</p>
                </div>
                <div class="card-action">

                    <form action="/chofer/verDetalleDeProformaConcretaAModificar" method="post">
                        <input type="hidden" value="{{id_proforma}}" name="id_proforma">

                        <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">Detalle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{/listarTodasLasProformasModificar}}


{{#listadoDeProformas}}

<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Id proforma: {{id_proforma}}</span>
                    <p><strong>Nombre cliente:</strong> {{denominacion}}</p>
                </div>
                <div class="card-action">
                    <form action="/chofer/modificarProformaConcreta" method="post">
                        <input type="hidden" value="{{id_proforma}}" name="id_proforma">
                        <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">Ver detalle<i class="material-icons right">send</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{/listadoDeProformas}}

{{#mostrarFormularioCargaDeDatosDelViaje}}

<div class="row login">
    <div class="col s12 m6 offset-m3">
        <div class="card">
            <div class="card-action gray accent-4 orange-text">
                <h3>Cargar datos de viaje</h3>
            </div>
            <form method="POST" action="/chofer/procesarDatosDeViaje">

                <br>

                <label>Nro proforma:</label>
                <input readonly="readonly" type="text" value="{{id_proforma}}" id="id_proforma" name="id_proforma" class="white-text" required>

                <br>

                <label>Cliente:</label>
                <input readonly="readonly" type="text" value="{{denominacion}}" id="denominacion" name="denominacion" class="white-text" required>



                <br>

                <label for="usuario">Chofer:</label>
                <input readonly="readonly" type="text" value="{{usuario}}" id="usuario" name="usuario" class="white-text" required>

                <br><br><br>

                <label for="costeo_km_reales">Km reales:</label>
                <input type="number" id="costeo_km_reales" name="costeo_km_reales" class="white-text" required>



                <br>

                <label for="costeo_combustible_real">Combustible real:</label>
                <input type="number" id="costeo_combustible_real" name="costeo_combustible_real" class="white-text" required>

                <br>

                <label for="costeo_ETD_real">ETD real:</label>
                <input type="number" id="costeo_ETD_real" name="costeo_ETD_real" class="white-text" required>

                <br>

                <label for="costeo_ETA_real">ETA real:</label>
                <input type="number" id="costeo_ETA_real" name="costeo_ETA_real" class="white-text" required>

                <br>

                <label for="costeo_viaticos_real">Viaticos real:</label>
                <input type="number" id="costeo_viaticos_real" name="costeo_viaticos_real" class="white-text" required>

                <br>

                <label for="costeo_peajes_real">Peajes real:</label>
                <input type="number" id="costeo_peajes_real" name="costeo_peajes_real" class="white-text" required>

                <br>

                <label for="costeo_pesajes_real">Pesajes real:</label>
                <input type="number" id="costeo_pesajes_real" name="costeo_pesajes_real" class="white-text" required>

                <br>

                <label for="costeo_extras_real">Extras real:</label>
                <input type="number" id="costeo_extras_real" name="costeo_extras_real" class="white-text" required>

                <br>

                <label for="costeo_hazard_real">Hazard real:</label>
                <input type="number" id="costeo_hazard_real" name="costeo_hazard_real" class="white-text" required>

                <br>

                <label for="costeo_reefer_real">Reefer real:</label>
                <input type="number" id="costeo_reefer_real" name="costeo_reefer_real" class="white-text" required>

                <br>

                <label for="costeo_fee_real">Fee real:</label>
                <input type="number" id="costeo_fee_real" name="costeo_fee_real" class="white-text" required>



                <button type="submit" class="btn-large black accent-4">Cargar</button>
            </form>

        </div><br>


    </div>
</div>

{{/mostrarFormularioCargaDeDatosDelViaje}}



{{#faltaValidarLicenciaYORegistro}}

{{#mensaje}}
<nav >
    <div style="padding: 0 10px !important" class="nav-wrapper black">
        <a href="#" class="brand-logo">Bienvenido {{usuario}}</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a  class="btn red darken-2" href="/administrador/cerrarSesion">Cerrar sesión</a></li>
        </ul>
    </div>
</nav>
</header>

<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Usuario: {{usuario}}</span>
                    <p><strong>Rol:</strong> {{descripcion}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{/mensaje}}

<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><strong>Licencia:</strong> {{tipo_de_licencia}}</span>
                    <p><strong>Celular:</strong> {{nro}}</p>
                    <p class="red-text">Aun faltan validar la licencia y/o asignar un celular, por favor, comuniquese con su supervisor</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{/faltaValidarLicenciaYORegistro}}

{{#notificacion}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <p class="error center-align {{colorNotificacion}}-text ">{{notificacion}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{/notificacion}}


{{> footer}}