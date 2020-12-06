{{> headerProforma}}

{{#formulario}}
<div class="row login">
    <div class="col s12 m6 offset-m3">
        <div class="card">

            {{#alta}}
            <div class="card-action gray accent-4 orange-text">
                <h3>Cargar Proforma</h3>
            </div>
            <form method="POST" action="/proforma/procesarProforma">
                <div class="card-action form-field">
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" class="white-text" required>
                    <br><br>
                    <h5>Cliente</h5>
                    <br>
                    <label for="denominacion">Denominacion:</label>
                    <select id="denominacion" name="denominacion">
                        {{#cargarSelectCliente}}
                        <option value="{{id_cliente}}">{{denominacion}}</option>
                        {{/cargarSelectCliente}}
                    </select>
                    <br>
                    <label for="cuit">Cuit:</label>
                    <input type="text" id="cuit" name="cuit" class="white-text" required>
                    <br>
                    <label for="direccion">Direccion:</label>
                    <input type="text" id="direccion" name="direccion" class="white-text" required>
                    <br>
                    <label for="telefono">Telefono:</label>
                    <input type="text" id="telefono" name="telefono" class="white-text" required>
                    <br>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" class="white-text" required>
                    <br>
                    <label for="contacto1">Contacto 1:</label>
                    <input type="text" id="contacto1" name="contacto1" class="white-text" required>
                    <br>
                    <label for="contacto2">Contacto 2:</label>
                    <input type="text" id="contacto2" name="contacto2" class="white-text" required>
                    <br><br>
                    <h5>Viaje</h5>
                    <br>
                    <label for="origen">Origen:</label>
                    <input type="text" id="origen" name="origen" class="white-text" required>
                    <br>
                    <label for="destino">Destino:</label>
                    <input type="text" id="destino" name="destino" class="white-text" required>
                    <br>
                    <label for="fecha_carga">Fecha carga:</label>
                    <input type="date" id="fecha_carga" name="fecha_carga" class="white-text" required>
                    <br>
                    <label for="ETD">ETD:</label>
                    <input type="date" id="ETD" name="ETD" class="white-text" required>
                    <br>
                    <label for="ETA">ETA:</label>
                    <input type="date" id="ETA" name="ETA" class="white-text" required>
                    <br><br>
                    <h5>Carga</h5>
                    <br>
                    <label for="tipo_carga">Tipo carga:</label>
                    <select id="tipo_carga" name="tipo_carga">
                        <option value="granel">Granel</option>
                        <option value="liquida">Liquida</option>
                    </select>
                    <br>
                    <label for="peso_neto">Peso neto:</label>
                    <input type="number" id="peso_neto" name="peso_neto" class="white-text" required>
                    <br>
                    <label for="tipo_hazard">Tipo hazard:</label>
                    <select id="tipo_hazard" name="tipo_hazard">
                        <option value="class">Class</option>
                        <option value="Sclass">Sclass</option>
                    </select>
                    <br>
                    <label for="temperatura_reefer">Temperatura reefer:</label>
                    <input type="text" id="temperatura_reefer" name="temperatura_reefer" class="white-text"
                           required>
                    <br><br>
                    <h5>Costeo</h5>
                    <br>
                    <label for="km_estimado">Km estimados:</label>
                    <input type="number" id="km_estimado" name="km_estimado" class="white-text" required>
                    <br>
                    <label for="combustible_estimado">Combustible estimado litros:</label>
                    <input type="number" id="combustible_estimado" name="combustible_estimado"
                           class="white-text" required>
                    <br>
                    <label for="viaticos_estimado">Viaticos estimado:</label>
                    <input type="number" id="viaticos_estimado" name="viaticos_estimado" class="white-text"
                           required>
                    <br>
                    <label for="peaj?es_estimado">Peajes estimado:</label>
                    <input type="number" id="peajes_estimado" name="peajes_estimado" class="white-text"
                           required>
                    <br>
                    <label for="pesajes_estimado">Pesajes estimado:</label>
                    <input type="number" id="pesajes_estimado" name="pesajes_estimado" class="white-text"
                           required>
                    <br>
                    <label for="extras_estimado">Extras:</label>
                    <input type="number" id="extras_estimado" name="extras_estimado" class="white-text"
                           required>
                    <br>
                    <label for="hazard_estimado">Hazard estimado:</label>
                    <input type="number" id="hazard_estimado" name="hazard_estimado" class="white-text"
                           required>
                    <br>
                    <label for="reefer_estimado">Reefer estimado:</label>
                    <input type="number" id="reefer_estimado" name="reefer_estimado" class="white-text"
                           required>
                    <br>
                    <label for="fee_estimado">Fee estimado:</label>
                    <input type="number" id="fee_estimado" name="fee_estimado" class="white-text" required>
                    <br><br>
                    <h5>Personal</h5>
                    <br>
                    <label for="chofer_asignado">Chofer asignado:</label>
                    <select id="chofer_asignado" name="chofer_asignado">
                        {{#cargarSelectChofer}}
                        <option value="{{usuario}}">{{nombre_completo}}</option>
                        {{/cargarSelectChofer}}
                    </select>
                    <br>
                    <label for="id_tractor">Tractor tipo:</label>
                    <select id="id_tractor" name="id_tractor">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <br>
                    <label for="id_arrastrador">Arrastrado tipo:</label>
                    <select id="id_arrastrador" name="id_arrastrador">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <br>
                </div>
                <br>
                <button type="submit" class="btn-large black accent-4">Enviar</button>
            </form>
            {{/alta}}

            {{#actualizacion}}
            <div class="card-action gray accent-4 orange-text">
                <h3>Modificacion Proforma</h3>
            </div>
            <form method="POST" action="/proforma/modificarProforma">
                <div class="card-action form-field">
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" class="white-text" value="{{fecha}}">
                    <br><br>
                    <h5>Cliente</h5>
                    <br>
                    <label for="denominacion">Denominacion:</label>
                    <select id="denominacion" name="denominacion">
                        {{#cargarSelectCliente}}
                        <option value="{{id_cliente}}">{{denominacion}}</option>
                        {{/cargarSelectCliente}}

                    </select>
                    <br>
                    <label for="cuit">Cuit:</label>
                    <input type="text" id="cuit" name="cuit" class="white-text" value="{{cliente_cuit}}">
                    <br>
                    <label for="direccion">Direccion:</label>
                    <input type="text" id="direccion" name="direccion" class="white-text"
                           value="{{cliente_direccion}}">
                    <br>
                    <label for="telefono">Telefono:</label>
                    <input type="text" id="telefono" name="telefono" class="white-text"
                           value="{{cliente_telefono}}">
                    <br>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" class="white-text" value="{{cliente_email}}">
                    <br>
                    <label for="contacto1">Contacto 1:</label>
                    <input type="text" id="contacto1" name="contacto1" class="white-text"
                           value="{{cliente_contacto1}}">
                    <br>
                    <label for="contacto2">Contacto 2:</label>
                    <input type="text" id="contacto2" name="contacto2" class="white-text"
                           value="{{cliente_contacto2}}">
                    <br><br>
                    <h5>Viaje</h5>
                    <br>
                    <label for="origen">Origen:</label>
                    <input type="text" id="origen" name="origen" class="white-text" value="{{viaje_origen}}">
                    <br>
                    <label for="destino">Destino:</label>
                    <input type="text" id="destino" name="destino" class="white-text" value="{{viaje_destino}}">
                    <br>
                    <label for="fecha_carga">Fecha carga:</label>
                    <input type="date" id="fecha_carga" name="fecha_carga" class="white-text" value="{{viaje_fecha_carga}}>
                            <br>
                            <label for=" ETD">ETD:</label>
                    <input type="text" id="ETD" name="ETD" class="white-text" required>
                    <br>
                    <label for="ETA">ETA:</label>
                    <input type="text" id="ETA" name="ETA" class="white-text" value="{{viaje_ETA}}">
                    <br><br>
                    <h5>Carga</h5>
                    <br>
                    <label for="tipo_carga">Tipo carga:</label>
                    <select id="tipo_carga" name="tipo_carga">
                        <option value="granel">Granel</option>
                        <option value="liquida">Liquida</option>
                    </select>
                    <br>
                    <label for="peso_neto">Peso neto:</label>
                    <input type="number" id="peso_neto" name="peso_neto" class="white-text"
                           value="{{carga_peso}}">
                    <br>
                    <label for="tipo_hazard">Tipo hazard:</label>
                    <select id="tipo_hazard" name="tipo_hazard">
                        <option value="class">Class</option>
                        <option value="Sclass">Sclass</option>
                    </select>
                    <br>
                    <label for="temperatura_reefer">Temperatura reefer:</label>
                    <input type="text" id="temperatura_reefer" name="temperatura_reefer" class="white-text"
                           value="{{carga_temperatura_reefer}}">
                    <br><br>
                    <h5>Costeo</h5>
                    <br>
                    <label for="km_estimado">Km estimados:</label>
                    <input type="number" id="km_estimado" name="km_estimado" class="white-text"
                           value="{{costeo_km_estimados}}">
                    <br>
                    <label for="combustible_estimado">Combustible estimado litros:</label>
                    <input type="number" id="combustible_estimado" name="combustible_estimado"
                           class="white-text" value="{{costeo_combustible_estimado}}">
                    <br>
                    <label for="viaticos_estimado">Viaticos estimado:</label>
                    <input type="number" id="viaticos_estimado" name="viaticos_estimado" class="white-text"
                           value="{{costeo_viaticos_estimado}}">
                    <br>
                    <label for="peajes_estimado">Peajes estimado:</label>
                    <input type="number" id="peajes_estimado" name="peajes_estimado" class="white-text"
                           value="{{costeo_peajes_estimados}}">
                    <br>
                    <label for="extras_estimado">Extras:</label>
                    <input type="number" id="extras_estimado" name="extras_estimado" class="white-text"
                           value="{{costeo_extras_estimados}}">
                    <br>
                    <label for="hazard_estimado">Hazard estimado:</label>
                    <input type="number" id="hazard_estimado" name="hazard_estimado" class="white-text"
                           value="{{costeo_hazard_estimado}}">
                    <br>
                    <label for="reefer_estimado">Reefer estimado:</label>
                    <input type="number" id="reefer_estimado" name="reefer_estimado" class="white-text"
                           value="{{costeo_reefer_estimado}}">
                    <br>
                    <label for="fee_estimado">Fee estimado:</label>
                    <input type="number" id="fee_estimado" name="fee_estimado" class="white-text"
                           value="{{costeo_fee_estimado}}">
                    <br><br>
                    <h5>Personal</h5>
                    <br>
                    <label for="chofer_asignado">Chofer asignado:</label>
                    <select id="chofer_asignado" name="chofer_asignado">
                        {{#cargarSelectChofer}}
                        <option value="{{usuario}}">{{nombre_completo}}</option>
                        {{/cargarSelectChofer}}
                    </select>
                    <br>
                    <label for="id_tractor">Tractor tipo:</label>
                    <select id="id_tractor" name="id_tractor">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <br>
                    <label for="id_arrastrador">Arrastrado tipo:</label>
                    <select id="id_arrastrador" name="id_arrastrador">
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                    </select>
                    <br>
                </div>
                <br>
                <button type="submit" class="btn-large black accent-4">Enviar</button>
            </form>
            {{/actualizacion}}

            {{#detalle}}
            <div class="card-action gray accent-4 orange-text">
                <h3>Detalle Proforma</h3>
            </div>
            <form method="POST" action>
                <div class="card-action form-field">
                    <label for="fecha">Fecha:</label>
                    <input type="text" id="fecha" name="fecha" class="white-text" value="{{fecha}}"
                           disabled="disabled"/>
                    <br/>
                    <br/>
                    <h5>Cliente</h5>
                    <br/>
                    <label for="denominacion">Denominacion:</label>
                    <input type="text" class="white-text" value="{{viaje_denominacion}}" disabled="disabled"/>
                    <br/>
                    <label for="cuit">Cuit:</label>
                    <input type="text" id="cuit" name="cuit" class="white-text" value="{{cliente_cuit}}"
                           disabled="disabled"/>
                    <br/>
                    <label for="direccion">Direccion:</label>
                    <input type="text" id="direccion" name="direccion" class="white-text"
                           value="{{cliente_direccion}}" disabled="disabled"/>
                    <br/>
                    <label for="telefono">Telefono:</label>
                    <input type="text" id="telefono" name="telefono" class="white-text"
                           value="{{cliente_telefono}}" disabled="disabled"/>
                    <br/>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" class="white-text" value="{{cliente_email}}"
                           disabled="disabled"/>
                    <br/>
                    <label for="contacto1">Contacto 1:</label>
                    <input type="text" id="contacto1" name="contacto1" class="white-text"
                           value="{{cliente_contacto1}}" disabled="disabled"/>
                    <br/>
                    <label for="contacto2">Contacto 2:</label>
                    <input type="text" id="contacto2" name="contacto2" class="white-text"
                           value="{{cliente_contacto2}}" disabled="disabled"/>
                    <br/><br/>
                    <h5>Viaje</h5>
                    <br/>
                    <label for="origen">Origen:</label>
                    <input type="text" id="origen" name="origen" class="white-text" value="{{viaje_origen}}"
                           disabled="disabled"/>
                    <br/>
                    <label for="destino">Destino:</label>
                    <input type="text" id="destino" name="destino" class="white-text" value="{{viaje_destino}}"
                           disabled="disabled"/>
                    <br/>
                    <label for="fecha_carga">Fecha carga:</label>
                    <input type="text" id="fecha_carga" name="fecha_carga" class="white-text"
                           value="{{viaje_fecha_carga}}" disabled="disabled"/>
                    <br/>
                    <label for="ETD">ETD:</label>
                    <input type="text" id="ETD" name="ETD" class="white-text" value="{{viaje_ETD}}"
                           disabled="disabled"/>
                    <br/>
                    <label for="ETA">ETA:</label>
                    <input type="text" id="ETA" name="ETA" class="white-text" disabled="disabled"/>
                    <br/><br/>
                    <h5>Carga</h5>
                    <br/>
                    <label for="tipo_carga">Tipo carga:</label>
                    <input type="text" class="white-text" value="{{carga_tipo}}" disabled="disabled">
                    <br/>
                    <label for="peso_neto">Peso neto:</label>
                    <input type="text" id="peso_neto" name="peso_neto" class="white-text" value="{{carga_peso}}"
                           disabled="disabled"/>
                    <br/>
                    <label for="tipo_hazard">Tipo hazard:</label>
                    <input type="text" class="white-text" value="{{carga_tipo_hazard}}" disabled="disabled"/>
                    <br/>
                    <label for="temperatura_reefer">Temperatura reefer:</label>
                    <input type="text" id="temperatura_reefer" name="temperatura_reefer" class="white-text"
                           value="{{carga_temperatura_reefer}}" disabled="disabled"/>
                    <br/><br/>
                    <h5>Costeo</h5>
                    <br/>
                    <label for="km_estimado">Km estimados:</label>
                    <input value="{{costeo_km_estimados}}" type="text" id="km_estimado" name="km_estimado"
                           class="white-text" disabled="disabled"/>
                    <br/>
                    <label for="combustible_estimado">Combustible estimado litros:</label>
                    <input value="{{costeo_combustible_estimado}}" type="text" id="combustible_estimado"
                           name="combustible_estimado" class="white-text" disabled="disabled"/>
                    <br/>
                    <label for="viaticos_estimado">Viaticos estimado:</label>
                    <input value="{{costeo_viaticos_estimado}}" type="text" id="viaticos_estimado"
                           name="viaticos_estimado" class="white-text" disabled="disabled"/>
                    <br/>
                    <label for="peajes_estimado">Peajes estimado:</label>
                    <input value="{{costeo_peajes_estimado}}" type="text" id="peajes_estimado"
                           name="peajes_estimado" class="white-text" disabled="disabled"/>
                    <br/>
            </form>
            {{/detalle}}
        </div>
        <br>
    </div>
</div>
{{/formulario}}

{{> footer}}
