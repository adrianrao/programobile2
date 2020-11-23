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
    .dropdown-content li>a, .dropdown-content li>span{
        font-size: 1rem;
        color: #fff;
    }
    .dropdown-nested {
        overflow-y: visible;
    }
    .dropdown-content .dropdown-content {
        /* left: 100%;*/ /*drop hacia la izquierda*/
        left: -100%; /*drop hacia la derecha*/
        /* left: auto;*/ /*drop hacia el centro*/
    }

    .dropdown-content .mobile {
        /* left: 100%;*/ /*drop hacia la izquierda*/
        left: 0%; /*drop hacia la derecha*/
        /* left: auto;*/ /*drop hacia el centro*/
    }

</style>

<nav>
    <div style="padding: 0 10px !important" class="nav-wrapper black">
        <a href="/supervisor" class="brand-logo">Supervisor</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <!--Dropdown Trigger -->
            <li><a class="dropdown-trigger btn blue darken-2" href="#!" data-target="dropdownequipos">AMBL Equipos<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger btn orange darken-2" href="#!" data-target="dropdownclientes">AMBL Clientes<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger btn green darken-2" href="#!" data-target="dropdownproforma">AMBL Proforma<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="btn red darken-2" href="/supervisor/cerrarSesion">Cerrar sesión</a></li>
        </ul>
    </div>
</nav>

<!-- Dropdown Structure desk-->
<ul id="dropdownequipos" class="dropdown-content dropdown-nested">
    <li><a class="sub blue darken-2"  data-target="dropdownlistartractoresyarrastrados">Listar<i class="material-icons right">arrow_right</i></a></li>
    <li><a class="sub blue darken-2"  data-target="dropdownlistartractoresyarrastrados">Dar de alta<i class="material-icons right">arrow_right</i></a></li>
    <li><a class="sub blue darken-2"  data-target="dropdownlistartractoresyarrastrados">Dar de baja<i class="material-icons right">arrow_right</i></a></li>
    <li><a class="sub blue darken-2"  data-target="dropdownlistartractoresyarrastrados">Modificar<i class="material-icons right">arrow_right</i></a></li>
</ul>


<ul id="dropdownlistartractoresyarrastrados" class="dropdown-content">
    <li class="blue darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Listar tractores</a></li>
    <li class="blue darken-2"><a href="/supervisor/obtenerUsuariosSinRol">Listar arrastrados</a></li>
</ul>


<ul id="dropdownclientes" class="dropdown-content">
    <li class="orange darken-2"><a href="/supervisor/darAltaACliente">Listar</a></li>
    <li class="orange darken-2"><a href="/supervisor/darAltaACliente">Dar de alta</a></li>
    <li class="orange darken-2"><a href="/supervisor/traerTodosLosUsuariosABorrarOBloquear">Dar de baja</a></li>
    <li class="orange darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Modificar</a></li>
</ul>
<ul id="dropdownproforma" class="dropdown-content">
    <li class="green darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Listar</a></li>
    <li class="green darken-2"><a href="/supervisor/obtenerUsuariosSinRol">Dar de alta</a></li>
    <li class="green darken-2"><a href="/supervisor/traerTodosLosUsuariosABorrarOBloquear">Dar de baja</a></li>
    <li class="green darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Modificar</a></li>
</ul>




<!-- Dropdown Structure mobile-->


<ul class="sidenav" id="mobile-demo">
    <li><a class="dropdown-trigger btn blue darken-2" href="#!" data-target="dropdownequiposmobile">AMBL Equipos<i class="material-icons white-text right">arrow_drop_down</i></a></li>
    <li><a class="dropdown-trigger btn orange darken-2" href="#!" data-target="dropdownclientesmobile">AMBL Clientes<i class="material-icons white-text right">arrow_drop_down</i></a></li>
    <li><a class="dropdown-trigger btn green darken-2" href="#!" data-target="dropdownproformamobile">AMBL Proforma<i class="material-icons white-text right">arrow_drop_down</i></a></li>
    <li><a class="btn red darken-2" href="/supervisor/cerrarSesion">Cerrar sesión</a></li>
</ul>

<ul id="dropdownequiposmobile" class="dropdown-content dropdown-nested">
    <li><a class="submobile blue darken-2"  data-target="dropdownlistartractoresyarrastradosmobile">Listar<i class="material-icons white-text right">arrow_drop_down</i></a></li>
    <li><a class="submobile blue darken-2"  data-target="dropdownaltatractoresyarrastradosmobile">Dar de alta<i class="material-icons white-text right">arrow_drop_down</i></a></li>
    <li><a class="submobile blue darken-2"  data-target="dropdownbajatractoresyarrastradosmobile">Dar de baja<i class="material-icons white-text right">arrow_drop_down</i></a></li>
    <li><a class="submobile blue darken-2"  data-target="dropdownmodificartractoresyarrastradosmobile">Modificar<i class="material-icons white-text right">arrow_drop_down</i></a></li>
</ul>


<ul id="dropdownlistartractoresyarrastradosmobile" class="dropdown-content mobile">
    <li class="blue darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Listar tractores</a></li>
    <li class="blue darken-2"><a href="/supervisor/obtenerUsuariosSinRol">Listar arrastrados</a></li>
</ul>

<ul id="dropdownaltatractoresyarrastradosmobile" class="dropdown-content mobile">
    <li class="blue darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Dar de alta tractores</a></li>
    <li class="blue darken-2"><a href="/supervisor/obtenerUsuariosSinRol">Dar de alta arrastrados</a></li>
</ul>

<ul id="dropdownbajatractoresyarrastradosmobile" class="dropdown-content mobile">
    <li class="blue darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Dar de baja tractores</a></li>
    <li class="blue darken-2"><a href="/supervisor/obtenerUsuariosSinRol">Dar de baja arrastrados</a></li>
</ul>

<ul id="dropdownmodificartractoresyarrastradosmobile" class="dropdown-content mobile">
    <li class="blue darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Modificar tractores</a></li>
    <li class="blue darken-2"><a href="/supervisor/obtenerUsuariosSinRol">Modificar arrastrados</a></li>
</ul>

<ul id="dropdownclientesmobile" class="dropdown-content">
    <li class="orange darken-2"><a href="/supervisor/darAltaACliente">Listar</a></li>
    <li class="orange darken-2"><a href="/supervisor/darAltaACliente">Dar de alta</a></li>
    <li class="orange darken-2"><a href="/supervisor/traerTodosLosUsuariosABorrarOBloquear">Dar de baja</a></li>
    <li class="orange darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Modificar</a></li>
</ul>
<ul id="dropdownproformamobile" class="dropdown-content">
    <li class="green darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Listar</a></li>
    <li class="green darken-2"><a href="/supervisor/obtenerUsuariosSinRol">Dar de alta</a></li>
    <li class="green darken-2"><a href="/supervisor/traerTodosLosUsuariosABorrarOBloquear">Dar de baja</a></li>
    <li class="green darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Modificar</a></li>
</ul>






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
                        <label for="tel">Telefono del cliente:</label>
                        <input type="tel" id="tel" name="tel" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="contactoUno">Ingrese nombre del primer contacto:</label>
                        <input type="text" id="contactoUno" name="contactoUno" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="contactoDos">Ingrese nombre de segundo contacto:</label>
                        <input type="text" id="contactoDos" name="contactoDos" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <h5>Ingrese datos del domicilio del cliente:</h5>

                    </div><br>

                    <div class="form-field">
                        <label for="direccionCalle">Ingrese calle:</label>
                        <input type="text" id="direccionCalle" name="direccionCalle" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="direccionNro">Ingrese numero:</label>
                        <input type="text" id="direccionNro" name="direccionNro" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="direccionCp">Ingrese codigo postal:</label>
                        <input type="text" id="direccionCp" name="direccionCp" class="white-text" required>
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