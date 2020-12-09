{{#mostrarDetalleDeProforma}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <ul class="collection with-header">
                        <li class="collection-header"><strong class="orange-text text-lighten-2">
                                <h4>Proforma Numero:</strong> {{id_proforma}}</h4>
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Fecha:</strong> {{fecha}}
                        </li>
                        <h5 class="collection-item">Cliente</h5>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Denominacion:</strong>
                            {{denominacion}}
                        </li>
                        <h5 class="collection-item">Viaje</h5>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Origen:</strong>
                            {{viaje_origen}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Destino:</strong>
                            {{viaje_destino}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Fecha carga:</strong> {{viaje_fecha_carga}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">ETD:</strong>
                            {{viaje_etd}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">ETA:</strong>
                            {{viaje_eta}}
                        </li>
                        <h5 class="collection-item">Carga</h5>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Tipo carga:</strong>
                            {{carga_tipo}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Peso neto:</strong>
                            {{carga_peso}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Tipo hazard:</strong>
                            {{carga_tipo_hazard}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Temperatura reefer:</strong>
                            {{carga_temperatura_reefer}}
                        </li>
                        <h5 class="collection-item">Costeo</h5>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Km estimados:</strong>
                            {{costeo_km_estimados}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Combustible estimado litros:</strong>
                            {{costeo_combustible_estimado}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Viaticos estimado:</strong>
                            {{costeo_viaticos_estimado}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Peajes estimado:</strong>
                            {{costeo_peajes_estimado}}
                        </li>
                        <h5 class="collection-item">Personal</h5>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Chofer asignado:</strong>
                            {{nombre_completo}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Tractor tipo:</strong>
                            {{patente_tractor}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Arrastrado tipo:</strong>
                            {{patente_arrastrado}}
                        </li>
                        <h5 class="collection-item">Costos estimativo y real</h5>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Total Real:</strong>
                            {{costeo_total_real}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Total Estimado:</strong>
                            {{costeo_total_estimado}}
                        </li>
                        <br>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
{{/mostrarDetalleDeProforma}}