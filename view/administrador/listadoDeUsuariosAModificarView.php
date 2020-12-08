{{> header}}
{{#listadoDeUsuariosAModificar}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Usuario: {{usuario}}</span>
                    <p><strong>Nombre completo:</strong> {{nombre_completo}}</p>
                    <p><strong>Dni:</strong> {{dni}}</p>
                    <p><strong>Fecha de nacimiento:</strong> {{f_nac}}</p>
                    <p><strong>Rol:</strong> {{descripcion}}</p>
                </div>
                <div class="card-action">
                    <form action="/administrador/traerDatosDelUsuarioSeleccionadoParaAModificar" method="post">
                        <input type="hidden" value="{{usuario}}" name="usuario">
                        <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">Modificar Usuario
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
{{/listadoDeUsuariosAModificar}}
{{> footer}}