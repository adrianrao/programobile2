{{> header}}
<style>
    body {
        background-color: #b0a9a9;
    }
    .btn{
        background-color: #ff6d00  !important;
    }
    .select-wrapper input.select-dropdown{
        color: white;
    }
    .dropdown-content li>a, .dropdown-content li>span{
        color: #000  !important;
    }
    .select-wrapper input.select-dropdown:focus{
        border-bottom: 1px solid #ff6d00;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
    });
    var instance = M.FormSelect.getInstance(elem);

</script>
<nav >
    <div style="padding: 0 10px !important" class="nav-wrapper black">
        <a href="#" class="brand-logo">Administrador</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class="orange darken-2"><a href="/administrador/obtenerUsuariosSinRol">Asignar rol a usuarios sin rol</a></li>
            <li class="orange darken-2"><a href="/administrador/traerTodosLosUsuariosABorrarOBloquear">Dar de baja o bloquear a usuarios</a></li>
            <li class="orange darken-2"><a href="/administrador/traerTodosLosUsuariosAModificar">Modificar usuario</a></li>
            <li class="red darken-2"><a href="/administrador/cerrarSesion">Cerrar sesión</a></li>
        </ul>

    </div>
</nav>
</header>

{{#accionDelAdministrador}}
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
                    <form action="/administrador/{{accion}}" method="post">
                        {{#select}}
                        <div class="input-field col s12">
                                <select name="rol" required>
                                    <option value="" disabled selected>Sin rol</option>
                                    {{#roles}}
                                    <option value="{{id_rol}}">{{descripcion}}</option>
                                    {{/roles}}
                                </select>
                            <label>Seleccione un rol</label>
                        </div>
                        {{/select}}
                        <input type="hidden" value="{{usuario}}" name="usuario">
                        <button class="btn waves-effect waves-light" type="submit" name="action">{{textoDeLaAccionDelBoton}}
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                    <br>
                    {{#accion2}}
                    <form action="/administrador/{{accion2}}" method="post">
                        <input type="hidden" value="{{usuario}}" name="usuario">
                        <button class="btn waves-effect waves-light" type="submit" name="action">{{textoDeLaAccionDelBoton2}}
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                    {{/accion2}}
                </div>
            </div>
        </div>
    </div>
</div>
{{/accionDelAdministrador}}

{{#usuarioAModificar}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <form method="POST" action="/administrador/modificarUsuario">
                        <div class="card-content">
                            <div class="form-field">
                                <label for="username">Ingrese Usuario:</label>
                                <input type="text" id="usuarioInput" name="usuarioInput" class="white-text" value="{{usuario}}" required>
                            </div><br>

                            <div class="form-field">
                                <label for="username">Ingrese Nombre completo:</label>
                                <input type="text" id="nombreCompleto" name="nombreCompleto" class="white-text" value="{{nombre_completo}}" required>
                            </div><br>


                            <div class="form-field">
                                <label for="dni">D.N.I.:</label>
                                <input type="number" id="dni" name="dni" class="white-text" value="{{dni}}"  required>
                            </div><br>

                            <div class="form-field">
                                <label for="f_nac">Ingrese fecha nacimiento:</label>
                                <input type="date" id="f_nac" name="f_nac" class="white-text" value="{{f_nac}}" required>
                            </div><br>

                        </div>
                        <div class="card-action">
                            <div class="input-field col s12">
                                <select name="rol" required>
                                    <option value="{{id_rol}}"  selected>{{descripcion}}</option>
                                    {{#roles}}
                                    <option value="{{id_rol}}">{{descripcion}}</option>
                                    {{/roles}}
                                </select>
                                <label>Seleccione un rol</label>
                            </div>
                            <input type="hidden" value="{{usuario}}" name="usuario">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Modificar Usuario
                                <i class="material-icons right">send</i>
                    </form>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
{{/usuarioAModificar}}

{{#notificacion}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <p class="error center-align {{colorNotificacion}}-text ">{{notificacion}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{/notificacion}}


{{> footer}}