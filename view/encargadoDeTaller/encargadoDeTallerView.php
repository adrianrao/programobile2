{{> header}}
<style>
    body {
        background-color: #b0a9a9;
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

<nav >
    <div style="padding: 0 10px !important" class="nav-wrapper black">
        <a href="../../index.php" class="brand-logo">Encargado de taller</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a  class="btn orange darken-2" href="/encargadoDeTaller/mostrarFormularioAltaDeService">Realizar Service</a></li>
            <li><a  class="btn orange darken-2" href="/encargadoDeTaller/traerPosiblesServiceAModificar">Modificar Service</a></li>

            <li><a  class="btn red darken-2" href="/encargadoDeTaller/cerrarSesion">Cerrar sesión</a></li>
        </ul>
    </div>
</nav>



</header>



{{#formularioAltaDeService}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <form method="POST" action="/encargadoDeTaller/procesarService">
                        <div class="card-content">

                            <div class="form-field">
                                <label for="fecha">Fecha</label>
                                <input type="date" id="fecha" name="fecha" class="white-text"   required>
                            </div><br>


                            <div class="form-field">
                                <label for="costo">Costo:</label>
                                <input type="number" id="costo" name="costo" class="white-text" required>
                            </div><br>

                            <div class="form-field">
                                <label for="descripcion">Descripcion:</label>
                                <input type="text" id="descripcion" name="descripcion" class="white-text"  required>
                            </div><br>



                            <div class="form-field">
                                <label for="repuesto_utilizado">Repuestos Utilizados:</label>
                                <input type="text" id="repuesto_utilizado" name="repuesto_utilizado" class="white-text"  required>
                            </div><br>

                            <div class="form-field">
                                <label for="km_unidad">Kilometros de la unidad:</label>
                                <input type="text" id="km_unidad" name="km_unidad" class="white-text"  required>
                            </div><br>

                            <div class="card-action">
                                <div class="input-field col s12">
                                    <select name="tipo_service" required>

                                        <option value="interno" selected>Interno</option>
                                        <option value="externo" selected>Externo</option>

                                    </select>
                                    <label>Seleccione tipo de service</label>
                                </div>


                        </div>
                        <div class="card-action">
                            <div class="input-field col s12">
                                <select name="id_tractor" required>

                                    {{#cargarSelectTractor}}
                                    <option value="{{id_tractor}}"  selected>{{patente}}</option>
                                    {{/cargarSelectTractor}}
                                </select>
                                <label>Seleccione Tractor</label>
                            </div>

                            <div class="card-action">
                                <div class="input-field col s12">
                                    <select name="id_mecanico" required>

                                        {{#cargarSelectMecanico}}
                                        <option value="{{id_mecanico}}"  selected>{{nombre}}</option>
                                        {{/cargarSelectMecanico}}
                                    </select>
                                    <label>Seleccione Mecanico</label>
                                </div>
                            <input type="hidden" value="{{usuario}}" name="usuario">
                            <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">Cargar
                                <i class="material-icons right">send</i>
                    </form>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

{{/formularioAltaDeService}}

{{#traerPosiblesServiceAModificar}}

<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <form method="POST" action="/encargadoDeTaller/verDetalleService">

                        <div class="card-content">



                            <div class="form-field">
                                <label for="id_service">Nro Service</label>
                                <input type="text" id="id_service" name="id_service" value="{{id_service}}" class="white-text"   required>
                            </div><br>

                            <div class="form-field">
                                <label for="descripcion">Descripcion</label>
                                <input type="text" id="descripcion" name="descripcion" value="{{descripcion}}" class="white-text"   required>
                            </div><br>



                        </div>


                        <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">Detalle</button>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

{{/traerPosiblesServiceAModificar}}

{{#modificarServiceConcreto}}

<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <form method="POST" action="/encargadoDeTaller/modificarService">
                        <div class="card-content">

                            <div class="form-field">
                                <label for="id_service">Nro Service</label>
                                <input type="text" id="id_service" name="id_service" value="{{id_service}}" class="white-text"   required>
                            </div><br>

                            <div class="form-field">
                                <label for="fecha">Fecha</label>
                                <input value="{{fecha}}" type="date" id="fecha" name="fecha"  class="white-text"   required>
                            </div><br>


                            <div class="form-field">
                                <label for="costo">Costo:</label>
                                <input value="{{costo}}" type="number" id="costo" name="costo" class="white-text" required>
                            </div><br>

                            <div class="form-field">
                                <label for="descripcion">Descripcion:</label>
                                <input value="{{descripcion}}" type="text" id="descripcion" name="descripcion" class="white-text"  required>
                            </div><br>



                            <div class="form-field">
                                <label for="repuesto_utilizado">Repuestos Utilizados:</label>
                                <input value="{{repuesto_utilizado}}" type="text" id="repuesto_utilizado" name="repuesto_utilizado" class="white-text"  required>
                            </div><br>

                            <div class="form-field">
                                <label for="km_unidad">Kilometros de la unidad:</label>
                                <input value="{{km_unidad}}" type="text" id="km_unidad" name="km_unidad" class="white-text"  required>
                            </div><br>

                            <div class="form-field">
                                <label for="tipo_service">Tipo service (interno/externo):</label>
                                <input value="{{tipo_service}}" type="text" id="tipo_service" name="tipo_service" class="white-text"  required>
                            </div><br>


                        </div>
                        <div class="card-action">
                            <div class="input-field col s12">
                                <select name="id_tractor" required>

                                    {{#cargarSelectTractor}}
                                    <option value="{{id_tractor}}"  selected>{{patente}}</option>
                                    {{/cargarSelectTractor}}
                                </select>
                                <label>Seleccione Tractor</label>
                            </div>

                            <div class="card-action">
                                <div class="input-field col s12">
                                    <select name="id_mecanico" required>

                                        {{#cargarSelectMecanico}}
                                        <option value="{{id_mecanico}}"  selected>{{nombre}}</option>
                                        {{/cargarSelectMecanico}}
                                    </select>
                                    <label>Seleccione Mecanico</label>
                                </div>

                                <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">Modificar
                                    <i class="material-icons right">send</i></button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>



{{/modificarServiceConcreto}}

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