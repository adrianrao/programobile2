{{> header}}
{{#mostrarCelularesSinAsignacionDeChofer}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><strong>Celular:</strong> {{nro}} </span>
                </div>
                <div class="card-action">
                    <form action="/supervisor/asignarCelularAChofer" method="post">
                        <div class="input-field col s12">
                            <select name="usuario" required>
                                <option value="" disabled selected>Sin chofer asignado</option>
                                {{#choferesSinCelularAsignado}}
                                <option value="{{usuario}}">{{nombre_completo}}</option>
                                {{/choferesSinCelularAsignado}}
                            </select>
                            <label>Seleccione un chofer</label>
                        </div>
                        <input type="hidden" value="{{id_celular}}" name="idCelular">
                        <button class="btn waves-effect waves-light yellow darken-2" type="submit"
                                name="action">Asignar
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
{{/mostrarCelularesSinAsignacionDeChofer}}
{{> footer}}
