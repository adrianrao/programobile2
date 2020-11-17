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
                                <input type="text" id="usuario" name="usuario" class="white-text" value="{{usuario}}" required>
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
                        <input type="hidden" value="{{id_usuario}}" name="idUsuario">
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





{{> footer}}