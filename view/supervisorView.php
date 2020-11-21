{{> header}}

    <style>
    body{
        background-color: #b0a9a9;
        color: #fff;
    }

    .login .card{
        background: rgba(0,0,0,.6);
    }
    .login label{
        font-size: 16px;
        color:#ccc;
    }
    .login input{
        font-size: 22px !important;
    }
    .login button:hover{
        padding: 0px 40px;
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
        <a href="/supervisor" class="brand-logo">Supervisor</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class="orange darken-2"><a href="/supervisor/darAltaACliente">Dar de alta un cliente</a></li>
            <li class="orange darken-2"><a href="/supervisor/traerTodosLosUsuariosABorrarOBloquear">Dar de baja un cliente</a></li>
            <li class="orange darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Modificar un cliente</a></li>
            <li class="blue darken-2"><a href="/supervisor/obtenerUsuariosSinRol">Dar de alta un equipo</a></li>
            <li class="blue darken-2"><a href="/supervisor/traerTodosLosUsuariosABorrarOBloquear">Dar de baja un equipo</a></li>
            <li class="blue darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Modificar un equipo</a></li>
            <li class="red darken-2"><a href="/supervisor/cerrarSesion">Cerrar sesión</a></li>
        </ul>

    </div>
</nav>
</header>


{{#formAltaDeCliente}}
<div class="row login">
    <div class="col s12 m4 offset-m4">
        <div class="card">
            <div class="card-action gray accent-4 orange-text">
                <h3>Dar de alta cliente</h3>
            </div>
            <form method="POST" action="/supervisor/procesarFormulario">
                <div class="card-content">

                    <div class="form-field">
                        <label for="denominacion">Nombre de Cliente:</label>
                        <input type="text" id="denominacion" name="denominacion" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="cuit">Ingrese cuit de cliente:</label>
                        <input type="text" id="cuit" name="cuit" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="email">Ingrese email de cliente:</label>
                        <input type="email" id="email" name="email" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="dni">D.N.I.:</label>
                        <input type="number" id="dni" name="dni" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="f_nac">Ingrese fecha nacimiento:</label>
                        <input type="date" id="f_nac" name="f_nac" class="white-text" required>
                    </div><br>

                    <div class="form-field center-align">
                        <button type="submit" class="btn-large black accent-4">Enviar</button>
            </form>
        </div><br>
        <div class="center-align">
            <a href="/supervisor" class="btn-large red accent-5 center-align">Salir</a>
        </div>
        {{#notificacion}}
        <p class="error center-align {{colorNotificacion}}-text ">{{notificacion}}</p>
        {{/notificacion}}
    </div>
</div>
</div>
</div>
{{/formAltaDeCliente}}










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