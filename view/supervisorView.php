{{> header}}
<style>
    body{
        background-color: #b0a9a9;
        color: #fff;
    }
    .collection.with-header .collection-header{
        background: rgba(0,0,0,.6);
        border-bottom: none;
    }
    .collection.with-header .collection-item{
        background: rgba(0,0,0,.6);
        border-bottom: none;
    }
    .collection{
        border: 1px solid #F4A550;
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
    .select-wrapper input.select-dropdown{
        color: white;

    }

    .select-wrapper input.select-dropdown:focus{
        border-bottom: 1px solid #ff6d00;
    }

    .dropdown-content li>a, .dropdown-content li>span{
        font-size: 1rem;
        color: #000000;
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
        <!-- Disparador(MENU HAMBURGUESA) del SideNav Mobile -->
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <!-- Disparador del dropdown ESCRITORIO -->
            <li><a class="dropdown-trigger btn blue darken-2" href="#!" data-target="dropdownequipos">AMBL Equipos<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger btn orange darken-2" href="#!" data-target="dropdownclientes">AMBL Clientes<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger btn green darken-2" href="#!" data-target="dropdownproforma">AMBL Proforma<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="btn red darken-2" href="/supervisor/cerrarSesion">Cerrar sesión</a></li>
        </ul>
    </div>
</nav>






<!-- Estructura para Menu Dropdown Escritorio-->
<ul id="dropdownequipos" class="dropdown-content dropdown-nested">
    <li><a class="sub blue darken-2 white-text"  data-target="dropdownlistartractoresyarrastrados">Listar<i class="material-icons right">arrow_right</i></a></li>
    <li><a class="sub blue darken-2 white-text"  data-target="dropdownaltatractoresyarrastrados">Dar de alta<i class="material-icons right">arrow_right</i></a></li>
    <li><a class="sub blue darken-2 white-text"  data-target="dropdownbajatractoresyarrastrados">Dar de baja<i class="material-icons right">arrow_right</i></a></li>
    <li><a class="sub blue darken-2 white-text"  data-target="dropdownmodificartractoresyarrastrados">Modificar<i class="material-icons right">arrow_right</i></a></li>
</ul>


<ul id="dropdownlistartractoresyarrastrados" class="dropdown-content">
    <li><a class="blue darken-2 white-text" href="/supervisor/listarTodosLosTractores">Listar tractores</a></li>
    <li><a class="blue darken-2 white-text" href="/supervisor/listarTodosLosArrastrados">Listar arrastrados</a></li>
</ul>

<ul id="dropdownaltatractoresyarrastrados" class="dropdown-content">
    <li><a class="blue darken-2 white-text" href="/supervisor/darAltaATractor">Dar de alta tractores</a></li>
    <li><a class="blue darken-2 white-text" href="/supervisor/darAltaAArrastrado">Dar de alta arrastrados</a></li>
</ul>

<ul id="dropdownbajatractoresyarrastrados" class="dropdown-content">
    <li><a class="blue darken-2 white-text" href="/supervisor/listarTodosLosTractoresAEliminar">Dar de baja tractores</a></li>
    <li><a class="blue darken-2 white-text" href="/supervisor/listarTodosLosArrastradosAEliminar">Dar de baja arrastrados</a></li>
</ul>

<ul id="dropdownmodificartractoresyarrastrados" class="dropdown-content">
    <li><a class="blue darken-2 white-text" href="/supervisor/listarTodosLosPosiblesTractoresAModificar">Modificar tractores</a></li>
    <li><a class="blue darken-2 white-text" href="/supervisor/listarTodosLosPosiblesArrastradosAModificar">Modificar arrastrados</a></li>
</ul>


<ul id="dropdownclientes" class="dropdown-content">
    <li><a class="orange darken-2 white-text" href="/supervisor/listarTodosLosClientes">Listar</a></li>
    <li><a class="orange darken-2 white-text" href="/supervisor/darAltaACliente">Dar de alta</a></li>
    <li><a class="orange darken-2 white-text" href="/supervisor/listarTodosLosClientesAEliminar">Dar de baja</a></li>
    <li><a class="orange darken-2 white-text" href="/supervisor/listarTodosLosPosiblesClientesAModificar">Modificar</a></li>

</ul>
<ul id="dropdownproforma" class="dropdown-content">
    <li><a class="green darken-2 white-text" href="/supervisor/traerTodosLosUsuariosAModificar">Listar</a></li>
    <li><a class="green darken-2 white-text" href="/supervisor/mostrarFormularioProforma">Cargar proforma</a></li>
    <li><a class="green darken-2 white-text" href="/supervisor/traerTodosLosUsuariosABorrarOBloquear">Eliminar</a></li>
    <li><a class="green darken-2 white-text" href="/supervisor/traerTodosLosUsuariosAModificar">Modificar</a></li>

</ul>




<!-- Estructura para Menu Dropdown Mobile-->


<ul class="sidenav" id="mobile-demo">
    <li><a class="dropdown-trigger btn blue darken-2" href="#!" data-target="dropdownequiposmobile">AMBL Equipos<i class="material-icons white-text right">arrow_drop_down</i></a></li>
    <li><a class="dropdown-trigger btn orange darken-2" href="#!" data-target="dropdownclientesmobile">AMBL Clientes<i class="material-icons white-text right">arrow_drop_down</i></a></li>
    <li><a class="dropdown-trigger btn green darken-2" href="#!" data-target="dropdownproformamobile">AMBL Proforma<i class="material-icons white-text right">arrow_drop_down</i></a></li>
    <li><a class="btn red darken-2" href="/supervisor/cerrarSesion">Cerrar sesión</a></li>
</ul>

<ul id="dropdownequiposmobile" class="dropdown-content dropdown-nested">
    <li><a class="submobile blue darken-2 white-text"  data-target="dropdownlistartractoresyarrastradosmobile">Listar<i class="material-icons white-text right">arrow_drop_down</i></a></li>
    <li><a class="submobile blue darken-2 white-text"  data-target="dropdownaltatractoresyarrastradosmobile">Dar de alta<i class="material-icons white-text right">arrow_drop_down</i></a></li>
    <li><a class="submobile blue darken-2 white-text"  data-target="dropdownbajatractoresyarrastradosmobile">Dar de baja<i class="material-icons white-text right">arrow_drop_down</i></a></li>
    <li><a class="submobile blue darken-2 white-text"  data-target="dropdownmodificartractoresyarrastradosmobile">Modificar<i class="material-icons white-text right">arrow_drop_down</i></a></li>
</ul>


<ul id="dropdownlistartractoresyarrastradosmobile" class="dropdown-content mobile">
    <li><a class="blue darken-2 white-text" href="/supervisor/listarTodosLosTractores">Listar tractores</a></li>
    <li><a class="blue darken-2 white-text" href="/supervisor/listarTodosLosArrastrados">Listar arrastrados</a></li>
</ul>

<ul id="dropdownaltatractoresyarrastradosmobile" class="dropdown-content mobile">
    <li><a class="blue darken-2 white-text" href="/supervisor/darAltaATractor">Dar de alta tractores</a></li>
    <li><a class="blue darken-2 white-text" href="/supervisor/darAltaAArrastrado">Dar de alta arrastrados</a></li>
</ul>

<ul id="dropdownbajatractoresyarrastradosmobile" class="dropdown-content mobile">
    <li><a class="blue darken-2 white-text" href="/supervisor/listarTodosLosTractoresAEliminar">Dar de baja tractores</a></li>
    <li><a class="blue darken-2 white-text" href="/supervisor/listarTodosLosArrastradosAEliminar">Dar de baja arrastrados</a></li>
</ul>

<ul id="dropdownmodificartractoresyarrastradosmobile" class="dropdown-content mobile">
    <li><a class="blue darken-2 white-text" href="/supervisor/listarTodosLosPosiblesTractoresAModificar">Modificar tractores</a></li>
    <li><a class="blue darken-2 white-text" href="/supervisor/listarTodosLosPosiblesArrastradosAModificar">Modificar arrastrados</a></li>
</ul>

<ul id="dropdownclientesmobile" class="dropdown-content">
    <li><a class="orange darken-2 white-text" href="/supervisor/listarTodosLosClientes">Listar</a></li>
    <li><a class="orange darken-2 white-text" href="/supervisor/darAltaACliente">Dar de alta</a></li>
    <li><a class="orange darken-2 white-text" href="/supervisor/listarTodosLosClientesAEliminar">Dar de baja</a></li>
    <li><a class="orange darken-2 white-text" href="/supervisor/listarTodosLosPosiblesClientesAModificar">Modificar</a></li>
</ul>
<ul id="dropdownproformamobile" class="dropdown-content">
    <li><a class="green darken-2 white-text" href="/supervisor/traerTodosLosUsuariosAModificar">Listar</a></li>
    <li><a class="green darken-2 white-text" href="/supervisor/mostrarFormularioProforma">Cargar proforma</a></li>
    <li><a class="green darken-2 white-text" href="/supervisor/traerTodosLosUsuariosABorrarOBloquear">Eliminar</a></li>
    <li><a class="green darken-2 white-text" href="/supervisor/traerTodosLosUsuariosAModificar">Modificar</a></li>
</ul>


</header>

<!-- TERMINA HEADER COMIENZA MAIN! -->

<!-- COMIENZA ACCIONES DE CONTROL DE CLIENTE! -->

{{#listadoDeClientes}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Denominacion: {{denominacion}}</span>
                    <p><strong>Cuit cliente:</strong> {{cuit}}</p>
                </div>
                <div class="card-action">
                    <form action="/supervisor/mostrardetalledecliente" method="post">
                        <input type="hidden" value="{{id_cliente}}" name="id_cliente">
                        <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">Ver detalle<i class="material-icons right">send</i></button>
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
                    <ul class="collection with-header">
                        <li class="collection-header"><strong class="orange-text text-lighten-2"><h4>Denominacion:</strong>   {{denominacion}}</h4></li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Email:</strong> {{email}}</li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Telefono:</strong> {{telefono}}</li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Contacto 1:</strong> {{contacto1}}</li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Contacto 2:</strong> {{contacto2}}</li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Cuit:</strong> {{cuit}}</li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Calle:</strong> {{direccion_calle}}</li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Nro:</strong> {{direccion_nro}}</li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Codigo postal:</strong> {{direccion_cp}}</li>
                    </ul>
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
                    <span class="card-title">Denominacion: {{denominacion}}</span>
                    <p><strong>Cuit cliente:</strong> {{cuit}}</p>
                </div>
                <div class="card-action">
                    <form action="/supervisor/eliminarCliente" method="post">
                        <input type="hidden" value="{{id_cliente}}" name="id_cliente">
                        <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">Eliminar<i class="material-icons right">send</i></button>
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
                    <span class="card-title">Denominacion: {{denominacion}}</span>
                    <p><strong>Cuit cliente:</strong> {{cuit}}</p>
                </div>
                <div class="card-action">
                    <form action="/supervisor/mostrarDatosDelClienteConcretoAModificar" method="post">
                        <input type="hidden" value="{{id_cliente}}" name="id_cliente">
                        <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">Modificar<i class="material-icons right">send</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{/listarTodosLosPosiblesClientesAModificar}}


{{#mostrarDatosDelClienteConcretoAModificar}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <form method="POST" action="/supervisor/modificarClienteConcreto">
                        <div class="card-content">
                            <h3 class="orange-text">Modificar Cliente</h3>
                            <div class="form-field">
                                <div class="form-field">
                                    <label>Denominacion</label>
                                    <input type="text" id="denominacion" name="denominacion" class="white-text" value="{{denominacion}}" required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Email</label>
                                    <input type="text" id="email" name="email" class="white-text" value="{{email}}" required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Telefono</label>
                                    <input type="text" id="telefono" name="telefono" class="white-text" value="{{telefono}}" required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Contacto 1</label>
                                    <input type="text" id="contacto1" name="contacto1" class="white-text" value="{{contacto1}}" required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Contacto 2</label>
                                    <input type="text" id="contacto2" name="contacto2" class="white-text" value="{{contacto2}}" required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Cuit</label>
                                    <input type="text" id="cuit" name="cuit" class="white-text" value="{{cuit}}" required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Calle</label>
                                    <input type="text" id="direccion_calle" name="direccion_calle" class="white-text" value="{{direccion_calle}}" required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Nro</label>
                                    <input type="text" id="direccion_nro" name="direccion_nro" class="white-text" value="{{direccion_nro}}" required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Codigo postal</label>
                                    <input type="text" id="direccion_cp" name="direccion_cp" class="white-text" value="{{direccion_cp}}" required>
                                </div>
                                <br>

                            </div>
                            <div class="card-action">
                                <input type="hidden" name="id_cliente" value="{{id_cliente}}">
                                <button class="btn waves-effect waves-light orange darken-2" type="submit"
                                        name="action">Modificar Cliente
                                    <i class="material-icons right">send</i>
                    </form>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
{{/mostrarDatosDelClienteConcretoAModificar}}

{{#mostrarFormularioDeAltaDeCliente}}
<div class="row login">
    <div class="col s12 m4 offset-m4">
        <div class="card">
            <div class="card-action gray accent-4 orange-text">
                <h3>Registrar Cliente</h3>
            </div>
            <form method="POST" action="/supervisor/procesarFormularioCliente">
                <div class="card-content">

                    <div class="form-field">
                        <label for="denominacion">Denominacion:</label>
                        <input type="text" id="denominacion" name="denominacion" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="telefono">Telefono:</label>
                        <input type="text" id="telefono" name="telefono" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="contacto1">Contacto 1:</label>
                        <input type="text" id="contacto1" name="contacto1" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="contacto2">Contacto 2:</label>
                        <input type="text" id="contacto2" name="contacto2" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="cuit">Cuit:</label>
                        <input type="text" id="cuit" name="cuit" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="calle">Calle:</label>
                        <input type="text" id="calle" name="calle" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="nro">Nro:</label>
                        <input type="text" id="nro" name="nro" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="codigoPostal">Codigo postal:</label>
                        <input type="text" id="codigoPostal" name="codigoPostal" class="white-text" required>
                    </div><br>


                    <div class="form-field center-align">
                        <button type="submit" class="btn-large black accent-4">Enviar</button>
            </form>

        </div>
        {{/mostrarFormularioDeAltaDeCliente}}










        <!-- COMIENZA ACCIONES DE CONTROL DE TRACTOR! -->
        {{#listadoDeTractor}}
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card black darken-1">
                        <div class="card-content white-text">
                            <span class="card-title"><strong>Marca de tractor:</strong> {{marca}}</span>
                            <p><strong>Patente de Tractor:</strong> {{patente}}</p>
                        </div>
                        <div class="card-action">
                            <form action="/supervisor/mostrarDetalleDeTractor" method="post">
                                <input type="hidden" value="{{id_tractor}}" name="id_tractor">
                                <button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">Ver detalle<i class="material-icons right">send</i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{/listadoDeTractor}}



        {{#detalleTractor}}
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card black darken-1">
                        <div class="card-content white-text">
                            <ul class="collection with-header">
                                <li class="collection-header"><strong class="orange-text text-lighten-2"><h4>Tractor:</strong>   {{marca}}</h4></li>
                                <li class="collection-item"><strong class="orange-text text-lighten-2">Modelo:</strong> {{modelo}}</li>
                                <li class="collection-item"><strong class="orange-text text-lighten-2">Patente:</strong> {{patente}}</li>
                                <li class="collection-item"><strong class="orange-text text-lighten-2">Año de fabricacion:</strong> {{año_fabricacion}}</li>
                                <li class="collection-item"><strong class="orange-text text-lighten-2">Numero de motor:</strong> {{nro_motor}}</li>
                                <li class="collection-item"><strong class="orange-text text-lighten-2">Numero de chasis:</strong> {{nro_chasis}}</li>
                                <li class="collection-item"><strong class="orange-text text-lighten-2">Kilometraje:</strong> {{kilometraje}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{/detalleTractor}}



        {{#mostrarFormularioDeAltaDeTractor}}
        <div class="row login">
            <div class="col s12 m4 offset-m4">
                <div class="card">
                    <div class="card-action gray accent-4 orange-text">
                        <h3>Registrar Tractor</h3>
                    </div>
                    <form method="POST" action="/supervisor/procesarFormularioTractor">
                        <div class="card-content">

                            <div class="form-field">
                                <label for="marca">Marca:</label>
                                <input type="text" id="marca" name="marca" class="white-text" required>
                            </div><br>

                            <div class="form-field">
                                <label for="modelo">Modelo:</label>
                                <input type="text" id="modelo" name="modelo" class="white-text" required>
                            </div><br>

                            <div class="form-field">
                                <label for="anioFabricacion">Año de fabricacion:</label>
                                <input type="date" id="anioFabricacion" name="anioFabricacion" class="white-text" required>
                            </div><br>

                            <div class="form-field">
                                <label for="nroMotor">Numero de motor:</label>
                                <input type="text" id="nroMotor" name="nroMotor" class="white-text" required>
                            </div><br>

                            <div class="form-field">
                                <label for="nroChasis">Numero de chasis:</label>
                                <input type="text" id="nroChasis" name="nroChasis" class="white-text" required>
                            </div><br>

                            <div class="form-field">
                                <label for="patente">Patente:</label>
                                <input type="text" id="patente" name="patente" class="white-text" required>
                            </div><br>

                            <div class="form-field">
                                <label for="kilometraje">Kilometraje:</label>
                                <input type="number" id="kilometraje" name="kilometraje" class="white-text" required>
                            </div><br>

                            <div class="form-field center-align">
                                <button type="submit" class="btn-large black accent-4">Enviar</button>
                    </form>

                </div>
                {{/mostrarFormularioDeAltaDeTractor}}

                {{#listadoDeTractoresAEliminar}}
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="card black darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Marca: {{marca}}</span>
                                    <p><strong>Patente de Tractor:</strong> {{patente}}</p>
                                </div>
                                <div class="card-action">
                                    <form action="/supervisor/eliminarTractor" method="post">
                                        <input type="hidden" value="{{id_tractor}}" name="id_tractor">
                                        <button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">Eliminar<i class="material-icons right">send</i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{/listadoDeTractoresAEliminar}}

                {{#listarTodosLosPosiblesTractoresAModificar}}
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="card black darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Marca: {{marca}}</span>
                                    <p><strong>Patente de tractor:</strong> {{patente}}</p>
                                </div>
                                <div class="card-action">
                                    <form action="/supervisor/mostrarDatosDelTractorConcretoAModificar" method="post">
                                        <input type="hidden" value="{{id_tractor}}" name="id_tractor">
                                        <button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">Modificar<i class="material-icons right">send</i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{/listarTodosLosPosiblesTractoresAModificar}}

                {{#mostrarDatosDelTractorConcretoAModificar}}
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="card black darken-1">
                                <div class="card-content white-text">
                                    <form method="POST" action="/supervisor/modificarTractorConcreto">
                                        <div class="card-content">
                                            <h3 class="orange-text">Modificar Tractor</h3>
                                            <div class="form-field">
                                                <div class="form-field">
                                                    <label for="marca">Marca:</label>
                                                    <input type="text" id="marca" name="marca" class="white-text"
                                                           value="{{marca}}" required>
                                                </div>
                                                <br>

                                                <div class="form-field">
                                                    <label for="modelo">Modelo:</label>
                                                    <input type="text" id="modelo" name="modelo" class="white-text"
                                                           value="{{modelo}}" required>
                                                </div>
                                                <br>

                                                <div class="form-field">
                                                    <label for="anioFabricacion">Año de fabricacion:</label>
                                                    <input type="date" id="anioFabricacion" name="anioFabricacion"
                                                           class="white-text" value="{{año_fabricacion}}" required>
                                                </div>
                                                <br>

                                                <div class="form-field">
                                                    <label for="nroMotor">Numero de motor:</label>
                                                    <input type="text" id="nroMotor" name="nroMotor" class="white-text"
                                                           value="{{nro_motor}}" required>
                                                </div>
                                                <br>

                                                <div class="form-field">
                                                    <label for="nroChasis">Numero de chasis:</label>
                                                    <input type="text" id="nroChasis" name="nroChasis"
                                                           class="white-text" value="{{nro_chasis}}" required>
                                                </div>
                                                <br>

                                                <div class="form-field">
                                                    <label for="patente">Patente:</label>
                                                    <input type="text" id="patente" name="patente" class="white-text"
                                                           value="{{patente}}" required>
                                                </div>
                                                <br>

                                                <div class="form-field">
                                                    <label for="kilometraje">Kilometraje:</label>
                                                    <input type="number" id="kilometraje" name="kilometraje"
                                                           class="white-text" value="{{kilometraje}}" required>
                                                </div>
                                                <br>

                                            </div>
                                            <div class="card-action">
                                                <input type="hidden" name="id_tractor" value="{{id_tractor}}">
                                                <button class="btn waves-effect waves-light blue darken-2" type="submit"
                                                        name="action">Modificar Tractor
                                                    <i class="material-icons right">send</i>
                                    </form>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{/mostrarDatosDelTractorConcretoAModificar}}

        <!-- COMIENZA ACCIONES DE CONTROL DE ARRASTRADOS! -->


        {{#listadoDeArrastrados}}
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card black darken-1">
                        <div class="card-content white-text">
                            <span class="card-title"><strong>Patente de arrastrado:</strong> {{patente}} </span>
                        </div>
                        <div class="card-action">
                            <form action="/supervisor/mostrarDetalleDeArrastrado" method="post">
                                <input type="hidden" value="{{id_arrastrado}}" name="id_arrastrado">
                                <button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">Ver detalle<i class="material-icons right">send</i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{/listadoDeArrastrados}}

        {{#detalleArrastrado}}
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card black darken-1">
                        <div class="card-content white-text">
                            <ul class="collection with-header">
                                <li class="collection-header"><strong class="orange-text text-lighten-2"><h4>Arrastrado:</strong>   {{patente}}</h4></li>
                                <li class="collection-item"><strong class="orange-text text-lighten-2">Numero de chasis:</strong> {{nro_chasis}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{/detalleArrastrado}}


        {{#mostrarFormularioDeAltaDeArrastrado}}
        <div class="row login">
            <div class="col s12 m4 offset-m4">
                <div class="card">
                    <div class="card-action gray accent-4 orange-text">
                        <h3>Registrar Arrastrado</h3>
                    </div>
                    <form method="POST" action="/supervisor/procesarFormularioArrastrado">
                        <div class="card-content">

                            <div class="form-field">
                                <label for="marca">Patente:</label>
                                <input type="text" id="patente" name="patente" class="white-text" required>
                            </div><br>

                            <div class="form-field">
                                <label for="nroChasis">Numero de chasis:</label>
                                <input type="text" id="nroChasis" name="nroChasis" class="white-text" required>
                            </div><br>

                            <div class="form-field center-align">
                                <button type="submit" class="btn-large black accent-4">Enviar</button>
                    </form>

                </div>
                {{/mostrarFormularioDeAltaDeArrastrado}}

                {{#listadoDeArrastradosAEliminar}}
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="card black darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title"><strong>Arrastrado:</strong> {{patente}} </span>
                                </div>
                                <div class="card-action">
                                    <form action="/supervisor/eliminarArrastrado" method="post">
                                        <input type="hidden" value="{{id_arrastrado}}" name="id_arrastrado">
                                        <button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">Eliminar<i class="material-icons right">send</i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{/listadoDeArrastradosAEliminar}}

                {{#listarTodosLosPosiblesArrastradosAModificar}}
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="card black darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title"><strong>Arrastrado:</strong> {{patente}} </span>
                                </div>
                                <div class="card-action">
                                    <form action="/supervisor/mostrarDatosDelArrastradoConcretoAModificar" method="post">
                                        <input type="hidden" value="{{id_arrastrado}}" name="id_arrastrado">
                                        <button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">Modificar<i class="material-icons right">send</i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{/listarTodosLosPosiblesArrastradosAModificar}}

                {{#mostrarDatosDelArrastradoConcretoAModificar}}
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="card black darken-1">
                                <div class="card-content white-text">
                                    <form method="POST" action="/supervisor/modificarArrastradoConcreto">
                                        <div class="card-content">
                                            <h3 class="orange-text">Modificar Arrastrado</h3>
                                            <div class="form-field">
                                                <div class="form-field">
                                                    <label for="marca">Patente:</label>
                                                    <input type="text" id="patente" name="patente" class="white-text"
                                                           value="{{patente}}" required>
                                                </div>
                                                <br>

                                                <div class="form-field">
                                                    <label for="modelo">Numero de chasis:</label>
                                                    <input type="text" id="nroChasis" name="nroChasis" class="white-text"
                                                           value="{{nro_chasis}}" required>
                                                </div>
                                                <br>

                                                <div class="card-action">
                                                    <input type="hidden" name="id_arrastrado" value="{{id_arrastrado}}">
                                                    <button class="btn waves-effect waves-light blue darken-2" type="submit"
                                                            name="action">Modificar Arrastrado
                                                        <i class="material-icons right">send</i>
                                    </form>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{/mostrarDatosDelArrastradoConcretoAModificar}}

        <!-- COMIENZA ACCIONES DE CONTROL DE PROFORMA! -->



        {{#mostrarFormularioCargaProforma}}
        <div class="row login">
            <div class="col s12 m4 offset-m4">
                <div class="card">
                    <div class="card-action gray accent-4 orange-text">
                        <h3>Cargar Proforma</h3>
                    </div>
                    <form method="POST" action="/supervisor/procesarProforma">

                        <div class="form-field">
                            <label for="fecha">Fecha:</label>
                        <input type="date" id="fecha" name="fecha" class="white-text" required>

                            <br><br>

                            <h5>Cliente</h5>


                            <br>

                            <label for="denominacion">Denominacion:</label>
                            <select id="denominacion" name="denominacion">
                                {{#cargarSelectCliente}}
                                    <option value="{{id_cliente}}">{{denominacion}}</option>
                                {{/cargarSelectCliente}}

                            </select>

                            <br>

                            <label for="cuit">Cuit:</label>
                            <input type="text" id="cuit" name="cuit" class="white-text" required>

                            <br>

                            <label for="direccion">Direccion:</label>
                            <input type="text" id="direccion" name="direccion" class="white-text" required>

                            <br>

                            <label for="telefono">Telefono:</label>
                            <input type="text" id="telefono" name="telefono" class="white-text" required>

                            <br>

                            <label for="email">Email:</label>
                            <input type="text" id="email" name="email" class="white-text" required>

                            <br>

                            <label for="contacto1">Contacto 1:</label>
                            <input type="text" id="contacto1" name="contacto1" class="white-text" required>

                            <br>

                            <label for="contacto2">Contacto 2:</label>
                            <input type="text" id="contacto2" name="contacto2" class="white-text" required>

                            <br><br>

                            <h5>Viaje</h5>

                            <br>

                            <label for="origen">Origen:</label>
                            <input type="text" id="origen" name="origen" class="white-text" required>

                            <br>

                            <label for="destino">Destino:</label>
                            <input type="text" id="destino" name="destino" class="white-text" required>

                            <br>

                            <label for="fecha_carga">Fecha carga:</label>
                            <input type="date" id="fecha_carga" name="fecha_carga" class="white-text" required>

                            <br>

                            <label for="ETA">ETA:</label>
                            <input type="text" id="ETA" name="ETA" class="white-text" required>

                            <br><br>

                            <h5>Carga</h5>

                            <br>

                            <label for="tipo_carga">Tipo carga:</label>
                            <select id="tipo_carga" name="tipo_carga">
                                <option value="granel" >Granel</option>
                                <option value="liquida">Liquida</option>
                            </select>

                            <br>

                            <label for="peso_neto">Peso neto:</label>
                            <input type="number" id="peso_neto" name="peso_neto" class="white-text" required>

                            <br>

                            <label for="tipo_hazard">Tipo hazard:</label>
                            <select id="tipo_hazard" name="tipo_hazard">
                                <option value="class" >Class</option>
                                <option value="Sclass">Sclass</option>
                            </select>

                            <br>

                            <label for="temperatura_reefer">Temperatura reefer:</label>
                            <input type="text" id="temperatura_reefer" name="temperatura_reefer" class="white-text" required>

                            <br><br>

                            <h5>Costeo</h5>

                            <br>

                            <label for="km_estimado">Km estimados:</label>
                            <input type="number" id="km_estimado" name="km_estimado" class="white-text" required>

                            <br>

                            <label for="combustible_estimado">Combustible estimado litros:</label>
                            <input type="number" id="combustible_estimado" name="combustible_estimado" class="white-text" required>

                            <br>

                            <label for="ETD_estimado">ETD estimado:</label>
                            <input type="number" id="ETD_estimado" name="ETD_estimado" class="white-text" required>

                            <br>

                            <label for="ETA_estimado">ETA estimado:</label>
                            <input type="number" id="ETA_estimado" name="ETA_estimado" class="white-text" required>

                            <br>

                            <label for="viaticos_estimado">Viaticos estimado:</label>
                            <input type="number" id="viaticos_estimado" name="viaticos_estimado" class="white-text" required>

                            <br>

                            <label for="peajes_estimado">Peajes estimado:</label>
                            <input type="number" id="peajes_estimado" name="peajes_estimado" class="white-text" required>

                            <br>

                            <label for="pesajes_estimado">Pesajes estimado:</label>
                            <input type="number" id="pesajes_estimado" name="pesajes_estimado" class="white-text" required>

                            <br>

                            <label for="extras_estimado">Extras:</label>
                            <input type="number" id="extras_estimado" name="extras_estimado" class="white-text" required>

                            <br>

                            <label for="hazard_estimado">Hazard estimado:</label>
                            <input type="number" id="hazard_estimado" name="hazard_estimado" class="white-text" required>

                            <br>

                            <label for="reefer_estimado">Reefer estimado:</label>
                            <input type="number" id="reefer_estimado" name="reefer_estimado" class="white-text" required>

                            <br>

                            <label for="fee_estimado">Fee estimado:</label>
                            <input type="number" id="fee_estimado" name="fee_estimado" class="white-text" required>

                            <br><br>

                            <h5>Personal</h5>

                            <br>

                            <label for="chofer_asignado">Chofer asignado:</label>
                            <select id="chofer_asignado" name="chofer_asignado">
                                {{#cargarSelectChofer}}
                                    <option value="{{usuario}}">{{usuario}}</option>
                                {{/cargarSelectChofer}}

                            </select>

                            <br>

                            <label for="id_tractor">Tractor tipo:</label>
                            <select id="id_tractor" name="id_tractor">
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>

                            <br>

                            <label for="id_arrastrador">Arrastrado tipo:</label>
                            <select id="id_arrastrador" name="id_arrastrador">
                                <option value="1" >1</option>
                                <option value="2">2</option>
                            </select>

                            <br>



                        </div><br>








                            <button type="submit" class="btn-large black accent-4">Enviar</button>
                    </form>

                </div><br>


            </div>
        </div>




{{/mostrarFormularioCargaProforma}}

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