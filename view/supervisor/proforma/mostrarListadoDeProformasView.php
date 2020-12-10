{{> header}}
{{#mostrarListadoDeProformas}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Numero: {{id_proforma}}</span>
                    <p><strong>Fecha:</strong> {{fecha}}</p>
                    <p><strong>Origen:</strong> {{viaje_origen}}</p>
                    <p><strong>Destino:</strong> {{viaje_destino}}</p>
                    <p><strong>Denominacion:</strong> {{denominacion}}</p>
                    <p><strong>Estado:</strong> {{estado}}</p>
                </div>
                <div class="card-action">

                    <form action="/proforma/mostrarDetalle" method="post">
                        <input type="hidden" value="{{id_proforma}}" name="id_proforma">
                        <button class="btn waves-effect waves-light green darken-2" type="submit"
                                name="action">Ver detalle<i
                                class="material-icons right">send</i></button>
                    </form>
                    <br>
                    <form action="/proforma/generarPdf" method="post">
                        <input type="hidden" value="{{id_proforma}}" name="id_proforma">
                        <button class="btn waves-effect waves-light green darken-2" type="submit"
                                name="action">Generar PDF<i
                                    class="material-icons right">send</i></button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

{{/mostrarListadoDeProformas}}
{{> footer}}