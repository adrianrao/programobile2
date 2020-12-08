{{> header}}
{{#listadoDeTractor}}
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="card black darken-1">
                    <div class="card-content white-text">
                        <span class="card-title"><strong>Marca de tractor:</strong> {{marca}}</span>
                        <p><strong>Patente de Tractor:</strong> {{patente_tractor}}</p>
                    </div>
                    <div class="card-action">
                        <form action="/supervisor/mostrarDetalleDeTractor" method="post">
                            <input type="hidden" value="{{id_tractor}}" name="id_tractor">
                            <button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">
                                Ver detalle<i
                                    class="material-icons right">send</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{/listadoDeTractor}}
{{> footer}}
