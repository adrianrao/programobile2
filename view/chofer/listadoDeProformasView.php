{{> header}}



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
                        <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">Ver
                            detalle<i class="material-icons right">send</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{/listadoDeProformas}}
{{> footer}}