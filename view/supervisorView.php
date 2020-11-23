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
    .btn{
        background-color: #ff6d00  !important;
    }
    .select-wrapper input.select-dropdown{
        color: white;
    }

    .select-wrapper input.select-dropdown:focus{
        border-bottom: 1px solid #ff6d00;
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
    <li><a class="sub blue darken-2"  data-target="dropdownaltatractoresyarrastrados">Dar de alta<i class="material-icons right">arrow_right</i></a></li>
    <li><a class="sub blue darken-2"  data-target="dropdownbajatractoresyarrastrados">Dar de baja<i class="material-icons right">arrow_right</i></a></li>
    <li><a class="sub blue darken-2"  data-target="dropdownmodificartractoresyarrastrados">Modificar<i class="material-icons right">arrow_right</i></a></li>
</ul>


<ul id="dropdownlistartractoresyarrastrados" class="dropdown-content">
    <li class="blue darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Listar tractores</a></li>
    <li class="blue darken-2"><a href="/supervisor/obtenerUsuariosSinRol">Listar arrastrados</a></li>
</ul>

<ul id="dropdownaltatractoresyarrastrados" class="dropdown-content">
    <li class="blue darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Dar de alta tractores</a></li>
    <li class="blue darken-2"><a href="/supervisor/obtenerUsuariosSinRol">Dar de alta arrastrados</a></li>
</ul>

<ul id="dropdownbajatractoresyarrastrados" class="dropdown-content">
    <li class="blue darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Dar de baja tractores</a></li>
    <li class="blue darken-2"><a href="/supervisor/obtenerUsuariosSinRol">Dar de baja arrastrados</a></li>
</ul>

<ul id="dropdownmodificartractoresyarrastrados" class="dropdown-content">
    <li class="blue darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Modificar tractores</a></li>
    <li class="blue darken-2"><a href="/supervisor/obtenerUsuariosSinRol">Modificar arrastrados</a></li>
</ul>


<ul id="dropdownclientes" class="dropdown-content">
    <li class="orange darken-2"><a href="/supervisor/listarTodosLosClientes">Listar</a></li>
    <li class="orange darken-2"><a href="/supervisor/darAltaACliente">Dar de alta</a></li>
    <li class="orange darken-2"><a href="/supervisor/listarTodosLosClientesAEliminar">Dar de baja</a></li>
    <li class="orange darken-2"><a href="/supervisor/listarTodosLosPosiblesClientesAModificar">Modificar</a></li>
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
    <li class="orange darken-2"><a href="/supervisor/listarTodosLosClientes">Listar</a></li>
    <li class="orange darken-2"><a href="/supervisor/darAltaACliente">Dar de alta</a></li>
    <li class="orange darken-2"><a href="/supervisor/listarTodosLosClientesAEliminar">Dar de baja</a></li>
    <li class="orange darken-2"><a href="/supervisor/listarTodosLosPosiblesClientesAModificar">Modificar</a></li>
</ul>
<ul id="dropdownproformamobile" class="dropdown-content">
    <li class="green darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Listar</a></li>
    <li class="green darken-2"><a href="/supervisor/obtenerUsuariosSinRol">Dar de alta</a></li>
    <li class="green darken-2"><a href="/supervisor/traerTodosLosUsuariosABorrarOBloquear">Dar de baja</a></li>
    <li class="green darken-2"><a href="/supervisor/traerTodosLosUsuariosAModificar">Modificar</a></li>
</ul>


</header>


{{#listadoDeClientes}}
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="card black darken-1">
                    <div class="card-content white-text">
                        <input type="hidden" value="{{id_cliente}}" name="id_cliente">
                        <span class="card-title">Denominacion: {{denominacion}}</span>
                        <p><strong>Cuit cliente:</strong> {{cuit}}</p>
                    </div>
                    <div class="card-action">
                        <form action="/supervisor/mostrardetalledecliente" method="post">
                            <input type="hidden" value="{{id_cliente}}" name="id_cliente">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Ver detalle<i class="material-icons right">send</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{/listadoDeClientes}}

{{#detalleCliente}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <label>Denominacion</label>
                    <input type="text" id="denominacion" name="denominacion" class="white-text" value="{{denominacion}}" required>
                    <label>Email</label>
                    <input type="text" id="email" name="email" class="white-text" value="{{email}}" required>
                    <label>Telefono</label>
                    <input type="text" id="telefono" name="telefono" class="white-text" value="{{telefono}}" required>
                    <label>Contacto 1</label>
                    <input type="text" id="contacto1" name="contacto1" class="white-text" value="{{contacto1}}" required>
                    <label>Contacto 2</label>
                    <input type="text" id="contacto2" name="contacto2" class="white-text" value="{{contacto2}}" required>
                    <label>Cuit</label>
                    <input type="text" id="cuit" name="cuit" class="white-text" value="{{cuit}}" required>
                    <label>Calle</label>
                    <input type="text" id="direccion_calle" name="direccion_calle" class="white-text" value="{{direccion_calle}}" required>
                    <label>Nro</label>
                    <input type="text" id="direccion_nro" name="direccion_nro" class="white-text" value="{{direccion_nro}}" required>
                    <label>Codigo postal</label>
                    <input type="text" id="direccion_cp" name="direccion_cp" class="white-text" value="{{direccion_cp}}" required>
                </div>
            </div>
        </div>
    </div>
</div>
{{/detalleCliente}}


{{#listadoDeClientesAeliminar}}
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="card black darken-1">
                    <div class="card-content white-text">
                        <input type="hidden" value="{{id_cliente}}" name="id_cliente">
                        <span class="card-title">Denominacion: {{denominacion}}</span>
                        <p><strong>Cuit cliente:</strong> {{cuit}}</p>
                    </div>
                    <div class="card-action">
                        <form action="/supervisor/eliminarCliente" method="post">
                            <input type="hidden" value="{{id_cliente}}" name="id_cliente">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Ver detalle<i class="material-icons right">send</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{/listadoDeClientesAeliminar}}


{{#listarTodosLosPosiblesClientesAModificar}}
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="card black darken-1">
                    <div class="card-content white-text">
                        <input type="hidden" value="{{id_cliente}}" name="id_cliente">
                        <span class="card-title">Denominacion: {{denominacion}}</span>
                        <p><strong>Cuit cliente:</strong> {{cuit}}</p>
                    </div>
                    <div class="card-action">
                        <form action="/supervisor/mostrarDatosDelClienteConcretoAModificar" method="post">
                            <input type="hidden" value="{{id_cliente}}" name="id_cliente">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Ver detalle<i class="material-icons right">send</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{/listarTodosLosPosiblesClientesAModificar}}


{{#mostrarDatosDelClienteConcretoAModificar}}
<form action="/supervisor/modificarClienteConcreto" method="post">
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="card black darken-1">
                    <div class="card-content white-text">
                        <input type="hidden" id="id_cliente" name="id_cliente" class="white-text" value="{{id_cliente}}" required>
                        <label>Denominacion</label>
                        <input type="text" id="denominacion" name="denominacion" class="white-text" value="{{denominacion}}" required>
                        <label>Email</label>
                        <input type="text" id="email" name="email" class="white-text" value="{{email}}" required>
                        <label>Telefono</label>
                        <input type="text" id="telefono" name="telefono" class="white-text" value="{{telefono}}" required>
                        <label>Contacto 1</label>
                        <input type="text" id="contacto1" name="contacto1" class="white-text" value="{{contacto1}}" required>
                        <label>Contacto 2</label>
                        <input type="text" id="contacto2" name="contacto2" class="white-text" value="{{contacto2}}" required>
                        <label>Cuit</label>
                        <input type="text" id="cuit" name="cuit" class="white-text" value="{{cuit}}" required>
                        <label>Calle</label>
                        <input type="text" id="direccion_calle" name="direccion_calle" class="white-text" value="{{direccion_calle}}" required>
                        <label>Nro</label>
                        <input type="text" id="direccion_nro" name="direccion_nro" class="white-text" value="{{direccion_nro}}" required>
                        <label>Codigo postal</label>
                        <input type="text" id="direccion_cp" name="direccion_cp" class="white-text" value="{{direccion_cp}}" required>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Modificar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
{{/mostrarDatosDelClienteConcretoAModificar}}

{{#mostrarFormularioDeAltaDeCliente}}
<div class="row login">
    <div class="col s12 m4 offset-m4">
        <div class="card">
            <div class="card-action gray accent-4 orange-text">
                <h3>Registrar Cliente</h3>
            </div>
            <form method="POST" action="/supervisor/procesarFormulario">
                <div class="card-content">

                    <div class="form-field">
                        <label for="username">Denominacion:</label>
                        <input type="text" id="denominacion" name="denominacion" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="username">Email:</label>
                        <input type="text" id="email" name="email" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="password">Telefono:</label>
                        <input type="text" id="telefono" name="telefono" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="dni">Contacto 1:</label>
                        <input type="text" id="contacto1" name="contacto1" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="f_nac">Contacto 2:</label>
                        <input type="text" id="contacto2" name="contacto2" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="f_nac">Cuit:</label>
                        <input type="text" id="cuit" name="cuit" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="f_nac">Calle:</label>
                        <input type="text" id="calle" name="calle" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="f_nac">Nro:</label>
                        <input type="text" id="nro" name="nro" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="f_nac">Codigo postal:</label>
                        <input type="text" id="codigoPostal" name="codigoPostal" class="white-text" required>
                    </div><br>


                    <div class="form-field center-align">
                        <button type="submit" class="btn-large black accent-4">Enviar</button>
            </form>

        </div>
{{/mostrarFormularioDeAltaDeCliente}}

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