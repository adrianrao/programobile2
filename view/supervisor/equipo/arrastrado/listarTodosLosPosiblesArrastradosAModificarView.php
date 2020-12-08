{{> header}}
{{#listarTodosLosPosiblesArrastradosAModificar}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><strong>Arrastrado:</strong> {{patente_arrastrado}} </span>
                </div>
                <div class="card-action">
                    <form action="/supervisor/mostrarDatosDelArrastradoConcretoAModificar"
                          method="post">
                        <input type="hidden" value="{{id_arrastrado}}" name="id_arrastrado">
                        <button class="btn waves-effect waves-light blue darken-2" type="submit"
                                name="action">Modificar<i
                                class="material-icons right">send</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{/listarTodosLosPosiblesArrastradosAModificar}}
{{> footer}}