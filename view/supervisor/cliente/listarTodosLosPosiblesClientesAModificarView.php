{{> header}}
{{#listarTodosLosPosiblesClientesAModificar}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Denominacion: {{denominacion}}</span>
                    <p><strong>Cuit cliente:</strong> {{cuit}}</p>
                </div>
                <div class="card-action">
                    <form action="/supervisor/mostrarDatosDelClienteConcretoAModificar" method="post">
                        <input type="hidden" value="{{id_cliente}}" name="id_cliente">
                        <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">
                            Modificar<i
                                class="material-icons right">send</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{/listarTodosLosPosiblesClientesAModificar}}
{{> footer}}
