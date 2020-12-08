{{> header}}
{{#listadoDeCelularesPosiblesAModificar}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><strong>Celular:</strong> {{nro}} </span>
                    <p><strong>Chofer asignado:</strong> {{nombre_completo}}</p>
                </div>
                <div class="card-action">
                    <form action="/supervisor/mostrarDatosDelCelularConcretoAModificar" method="post">
                        <input type="hidden" value="{{id_celular}}" name="idCelular">
                        <button class="btn waves-effect waves-light yellow darken-2" type="submit"
                                name="action">Modificar<i
                                class="material-icons right">send</i></button>
                    </form>
                    <br>
                    {{#id_chofer}}
                    <form action="/supervisor/quitarChoferAsignado" method="post">
                        <input type="hidden" value="{{id_celular}}" name="idCelular">
                        <button class="btn waves-effect waves-light yellow darken-3" type="submit"
                                name="action">Quitar
                            chofer asignado<i class="material-icons right">send</i></button>
                    {{/id_chofer}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{/listadoDeCelularesPosiblesAModificar}}
{{> footer}}
