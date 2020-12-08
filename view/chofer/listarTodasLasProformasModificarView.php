{{> header}}


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

                        <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">
                            Modificar<i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{/listarTodasLasProformasModificar}}
{{> footer}}