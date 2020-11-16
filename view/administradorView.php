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
            <li class="orange darken-2"><a href="/administrador/traerTodosLosUsuariosABorrar">Dar de baja a usuarios</a></li>
            <li class="orange darken-2"><a href="/administrador/traerTodosLosUsuariosAModificar">Modificar usuario</a></li>
            <li class="red darken-2"><a>Cerrar sesión</a></li>
        </ul>

    </div>
</nav>
</header>

{{#UsuariosSinRol}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Usuario: {{usuario}}</span>
                    <p><strong>ID:</strong> {{id_usuario}}</p>
                    <p><strong>Dni:</strong> {{dni}}</p>
                    <p><strong>Fecha de nacimiento:</strong> {{f_nac}}</p>
                    <p><strong>Rol:</strong> {{id_rol}}</p>
                </div>
                <div class="card-action">
                    <form action="/administrador/asignarRolAUsuario" method="post">
                        <div class="input-field col s12">
                                <select name="rol" required>
                                    <option value="" disabled selected>Sin rol</option>
                                    {{#roles}}
                                    <option value="{{id_rol}}">{{descripcion}}</option>
                                    {{/roles}}
                                </select>
                            <label>Seleccione un rol</label>
                        </div>
                        <input type="hidden" value="{{id_usuario}}" name="idUsuario">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Asignar rol
                            <i class="material-icons right">send</i>
                    </form>

                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
{{/UsuariosSinRol}}

{{#usuariosABorrar}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Usuario: {{usuario}}</span>
                    <p><strong>ID:</strong> {{id_usuario}}</p>
                    <p><strong>Dni:</strong> {{dni}}</p>
                    <p><strong>Fecha de nacimiento:</strong> {{f_nac}}</p>
                    <p><strong>Rol:</strong> {{descripcion}}</p>
                </div>
                <div class="card-action">
                    <form action="/administrador/darDeBajaUnUsuario" method="post">
                        <input type="hidden" value="{{id_usuario}}" name="idUsuario">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Dar de baja
                            <i class="material-icons right">send</i>
                    </form>

                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
{{/usuariosABorrar}}

{{#usuariosAModificar}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Usuario: {{usuario}}</span>
                    <p><strong>ID:</strong> {{id_usuario}}</p>
                    <p><strong>Dni:</strong> {{dni}}</p>
                    <p><strong>Fecha de nacimiento:</strong> {{f_nac}}</p>
                    <p><strong>Rol:</strong> {{descripcion}}</p>
                </div>
                <div class="card-action">
                    <form action="/administrador/modificarAUnUsuario" method="post">
                        <input type="hidden" value="{{id_usuario}}" name="idUsuario">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Modificar
                            <i class="material-icons right">send</i>
                    </form>

                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

{{/usuariosAModificar}}

{{#sinPendientesDeRol}}
<p class="error center-align green-text ">{{sinPendientesDeRol}}</p>
{{/sinPendientesDeRol}}

{{#modificacionOk}}
<p class="error center-align red-text ">{{modificacionOk}}</p>
{{/modificacionOk}}

{{#modificacionFallo}}
<p class="error center-align red-text ">{{modificacionFallo}}</p>
{{/modificacionFallo}}



{{> footer}}