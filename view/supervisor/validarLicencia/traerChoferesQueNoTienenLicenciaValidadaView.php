{{> header}}
{{#traerChoferesQueNoTienenLicenciaValidada}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><strong>Chofer:</strong> {{nombre_completo}}</span>
                </div>
                <div class="card-action">
                    <div class="input-field col s12">
                        <form action="/supervisor/validarLicenciaDeChoferSeleccionado" method="post">
                            <select name="idTipoDeLicencia" required>
                                <option value="" disabled selected>Sin validar</option>
                                {{#traerTodosLosTiposDeLicencia}}
                                <option value="{{id_tipo_licencia}}">{{tipo_de_licencia}} {{descripcion}}
                                </option>
                                {{/traerTodosLosTiposDeLicencia}}
                            </select>
                            <label>Seleccione un tipo de licencia</label>
                    </div>
                    <input type="hidden" value="{{usuario}}" name="usuario">
                    <button class="btn waves-effect waves-light grey darken-2" type="submit" name="action">
                        Validar<i
                            class="material-icons right">send</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{/traerChoferesQueNoTienenLicenciaValidada}}
{{> footer}}