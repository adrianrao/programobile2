{{> header}}
{{#mostrarDetalleDeProforma}}
<div class="row login">
    <div class="col s12 m6 offset-m3">
        <div class="card">
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
        <input type="text" class="white-text" value="{{denominacion}}" disabled="disabled"/>
        <br/>
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
        <h5>Personal</h5>
        <br>
        <label for="chofer_asignado">Chofer asignado:</label>
        <input value="{{nombre_completo}}" type="text" id="chofer_asignado"
               name="chofer_asignado" class="white-text" disabled="disabled"/>
        <br>
        <label for="id_tractor">Tractor tipo:</label>
        <input value="{{patente_tractor}}" type="text" id="id_tractor"
               name="id_tractor" class="white-text" disabled="disabled"/>
        <br>
        <label for="id_arrastrador">Tractor tipo:</label>
        <input value="{{patente_arrastrado}}" type="text" id="id_arrastrador"
               name="id_arrastrador" class="white-text" disabled="disabled"/>
        <br>
</form>
        </div>
        <br>
    </div>
</div>
{{/mostrarDetalleDeProforma}}
{{> footer}}
