{{> headerSupervisor}}

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
                        <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">Ver
                            detalle<i class="material-icons right">send</i></button>
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
                        <li class="collection-header"><strong class="orange-text text-lighten-2">
                                <h4>Denominacion:
                            </strong> {{denominacion}}</h4>
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Email:</strong> {{email}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Telefono:</strong>
                            {{telefono}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Contacto 1:</strong>
                            {{contacto1}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Contacto 2:</strong>
                            {{contacto2}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Cuit:</strong> {{cuit}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Calle:</strong>
                            {{direccion_calle}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Nro:</strong>
                            {{direccion_nro}}
                        </li>
                        <li class="collection-item"><strong class="orange-text text-lighten-2">Codigo postal:</strong>
                            {{direccion_cp}}
                        </li>
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
                        <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">
                            Eliminar<i
                                    class="material-icons right">send</i></button>
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
                        <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">
                            Modificar<i
                                    class="material-icons right">send</i></button>
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
                                    <input type="text" id="denominacion" name="denominacion" class="white-text"
                                           value="{{denominacion}}"
                                           required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Email</label>
                                    <input type="text" id="email" name="email" class="white-text" value="{{email}}"
                                           required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Telefono</label>
                                    <input type="text" id="telefono" name="telefono" class="white-text"
                                           value="{{telefono}}" required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Contacto 1</label>
                                    <input type="text" id="contacto1" name="contacto1" class="white-text"
                                           value="{{contacto1}}" required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Contacto 2</label>
                                    <input type="text" id="contacto2" name="contacto2" class="white-text"
                                           value="{{contacto2}}" required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Cuit</label>
                                    <input type="text" id="cuit" name="cuit" class="white-text" value="{{cuit}}"
                                           required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Calle</label>
                                    <input type="text" id="direccion_calle" name="direccion_calle" class="white-text"
                                           value="{{direccion_calle}}" required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Nro</label>
                                    <input type="text" id="direccion_nro" name="direccion_nro" class="white-text"
                                           value="{{direccion_nro}}" required>
                                </div>
                                <br>

                                <div class="form-field">
                                    <label>Codigo postal</label>
                                    <input type="text" id="direccion_cp" name="direccion_cp" class="white-text"
                                           value="{{direccion_cp}}"
                                           required>
                                </div>
                                <br>

                            </div>
                            <div class="card-action">
                                <input type="hidden" name="id_cliente" value="{{id_cliente}}">
                                <button class="btn waves-effect waves-light orange darken-2" type="submit"
                                        name="action">Modificar
                                    Cliente
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
                    </div>
                    <br>

                    <div class="form-field">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" class="white-text" required>
                    </div>
                    <br>

                    <div class="form-field">
                        <label for="telefono">Telefono:</label>
                        <input type="text" id="telefono" name="telefono" class="white-text" required>
                    </div>
                    <br>

                    <div class="form-field">
                        <label for="contacto1">Contacto 1:</label>
                        <input type="text" id="contacto1" name="contacto1" class="white-text" required>
                    </div>
                    <br>

                    <div class="form-field">
                        <label for="contacto2">Contacto 2:</label>
                        <input type="text" id="contacto2" name="contacto2" class="white-text" required>
                    </div>
                    <br>

                    <div class="form-field">
                        <label for="cuit">Cuit:</label>
                        <input type="text" id="cuit" name="cuit" class="white-text" required>
                    </div>
                    <br>

                    <div class="form-field">
                        <label for="calle">Calle:</label>
                        <input type="text" id="calle" name="calle" class="white-text" required>
                    </div>
                    <br>

                    <div class="form-field">
                        <label for="nro">Nro:</label>
                        <input type="text" id="nro" name="nro" class="white-text" required>
                    </div>
                    <br>

                    <div class="form-field">
                        <label for="codigoPostal">Codigo postal:</label>
                        <input type="text" id="codigoPostal" name="codigoPostal" class="white-text" required>
                    </div>
                    <br>


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
                                <button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">
                                    Ver detalle<i
                                            class="material-icons right">send</i></button>
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
                                <li class="collection-header"><strong class="orange-text text-lighten-2">
                                        <h4>Tractor:
                                    </strong> {{marca}}</h4>
                                </li>
                                <li class="collection-item"><strong class="orange-text text-lighten-2">Modelo:</strong>
                                    {{modelo}}
                                </li>
                                <li class="collection-item"><strong class="orange-text text-lighten-2">Patente:</strong>
                                    {{patente}}
                                </li>
                                <li class="collection-item"><strong class="orange-text text-lighten-2">Año de
                                        fabricacion:</strong> {{año_fabricacion}}
                                </li>
                                <li class="collection-item"><strong class="orange-text text-lighten-2">Numero de
                                        motor:</strong> {{nro_motor}}
                                </li>
                                <li class="collection-item"><strong class="orange-text text-lighten-2">Numero de
                                        chasis:</strong> {{nro_chasis}}
                                </li>
                                <li class="collection-item"><strong
                                            class="orange-text text-lighten-2">Kilometraje:</strong>
                                    {{kilometraje}}
                                </li>
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
                            </div>
                            <br>

                            <div class="form-field">
                                <label for="modelo">Modelo:</label>
                                <input type="text" id="modelo" name="modelo" class="white-text" required>
                            </div>
                            <br>

                            <div class="form-field">
                                <label for="anioFabricacion">Año de fabricacion:</label>
                                <input type="date" id="anioFabricacion" name="anioFabricacion" class="white-text"
                                       required>
                            </div>
                            <br>

                            <div class="form-field">
                                <label for="nroMotor">Numero de motor:</label>
                                <input type="text" id="nroMotor" name="nroMotor" class="white-text" required>
                            </div>
                            <br>

                            <div class="form-field">
                                <label for="nroChasis">Numero de chasis:</label>
                                <input type="text" id="nroChasis" name="nroChasis" class="white-text" required>
                            </div>
                            <br>

                            <div class="form-field">
                                <label for="patente">Patente:</label>
                                <input type="text" id="patente" name="patente" class="white-text" required>
                            </div>
                            <br>

                            <div class="form-field">
                                <label for="kilometraje">Kilometraje:</label>
                                <input type="number" id="kilometraje" name="kilometraje" class="white-text" required>
                            </div>
                            <br>

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
                                        <button class="btn waves-effect waves-light blue darken-2" type="submit"
                                                name="action">Eliminar<i
                                                    class="material-icons right">send</i></button>
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
                                        <button class="btn waves-effect waves-light blue darken-2" type="submit"
                                                name="action">Modificar<i
                                                    class="material-icons right">send</i></button>
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
                                                           class="white-text"
                                                           value="{{año_fabricacion}}" required>
                                                </div>
                                                <br>

                                                <div class="form-field">
                                                    <label for="nroMotor">Numero de motor:</label>
                                                    <input type="text" id="nroMotor" name="nroMotor" class="white-text"
                                                           value="{{nro_motor}}"
                                                           required>
                                                </div>
                                                <br>

                                                <div class="form-field">
                                                    <label for="nroChasis">Numero de chasis:</label>
                                                    <input type="text" id="nroChasis" name="nroChasis"
                                                           class="white-text" value="{{nro_chasis}}"
                                                           required>
                                                </div>
                                                <br>

                                                <div class="form-field">
                                                    <label for="patente">Patente:</label>
                                                    <input type="text" id="patente" name="patente" class="white-text"
                                                           value="{{patente}}"
                                                           required>
                                                </div>
                                                <br>

                                                <div class="form-field">
                                                    <label for="kilometraje">Kilometraje:</label>
                                                    <input type="number" id="kilometraje" name="kilometraje"
                                                           class="white-text"
                                                           value="{{kilometraje}}" required>
                                                </div>
                                                <br>

                                            </div>
                                            <div class="card-action">
                                                <input type="hidden" name="id_tractor" value="{{id_tractor}}">
                                                <button class="btn waves-effect waves-light blue darken-2" type="submit"
                                                        name="action">Modificar
                                                    Tractor
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
                                <button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">
                                    Ver detalle<i
                                            class="material-icons right">send</i></button>
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
                                <li class="collection-header"><strong class="orange-text text-lighten-2">
                                        <h4>Arrastrado:
                                    </strong> {{patente}}</h4>
                                </li>
                                <li class="collection-item"><strong class="orange-text text-lighten-2">Numero de
                                        chasis:</strong> {{nro_chasis}}
                                </li>
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
                            </div>
                            <br>

                            <div class="form-field">
                                <label for="nroChasis">Numero de chasis:</label>
                                <input type="text" id="nroChasis" name="nroChasis" class="white-text" required>
                            </div>
                            <br>

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
                                        <button class="btn waves-effect waves-light blue darken-2" type="submit"
                                                name="action">Eliminar<i
                                                    class="material-icons right">send</i></button>
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
                                    <form action="/supervisor/mostrarDatosDelArrastradoConcretoAModificar"
                                          method="post">
                                        <input type="hidden" value="{{id_arrastrado}}" name="id_arrastrado">
                                        <button class="btn waves-effect waves-light blue darken-2" type="submit"
                                                name="action">Modificar<i
                                                    class="material-icons right">send</i></button>
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
                                                           value="{{patente}}"
                                                           required>
                                                </div>
                                                <br>

                                                <div class="form-field">
                                                    <label for="modelo">Numero de chasis:</label>
                                                    <input type="text" id="nroChasis" name="nroChasis"
                                                           class="white-text" value="{{nro_chasis}}"
                                                           required>
                                                </div>
                                                <br>

                                                <div class="card-action">
                                                    <input type="hidden" name="id_arrastrado" value="{{id_arrastrado}}">
                                                    <button class="btn waves-effect waves-light blue darken-2"
                                                            type="submit"
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


        <!-- COMIENZA ACCIONES DE CONTROL DE VALIDAR LICENCIA! -->

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


        <!-- COMIENZA ACCIONES DE CONTROL DE AMLA CELULAR! -->

        {{#listadoDeCelulares}}
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card black darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Numero del celular: {{nro}}</span>
                            <p><strong>Chofer asignado:</strong> {{id_chofer}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{/listadoDeCelulares}}


        {{#mostrarFormularioDeAltaDeCelular}}
        <div class="row login">
            <div class="col s12 m4 offset-m4">
                <div class="card">
                    <div class="card-action gray accent-4 orange-text">
                        <h3>Registrar Celular</h3>
                    </div>
                    <form method="POST" action="/supervisor/procesarFormularioCelular">
                        <div class="card-content">

                            <div class="form-field">
                                <label for="numeroCelular">Numero Celular:</label>
                                <input type="tel" id="numeroCelular" name="numeroCelular" class="white-text" required>
                            </div>
                            <br>

                            <div class="form-field center-align">
                                <button type="submit" class="btn-large black accent-4">Registrar</button>
                    </form>

                </div>
                {{/mostrarFormularioDeAltaDeCelular}}


                {{#listadoDeCelularesPosiblesAModificar}}
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="card black darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title"><strong>Celular:</strong> {{nro}} </span>
                                    <p><strong>Chofer asignado:</strong> {{nombre_completo}}</p>
                                </div>
                                <div class="card-action">
                                    <form action="/supervisor/mostrarDatosDelCelularConcretoAModificar" method="post">
                                        <input type="hidden" value="{{id_celular}}" name="idCelular">
                                        <button class="btn waves-effect waves-light yellow darken-2" type="submit"
                                                name="action">Modificar<i
                                                    class="material-icons right">send</i></button>
                                    </form>
                                    <br>
                                    <form action="/supervisor/quitarChoferAsignado" method="post">
                                        <input type="hidden" value="{{id_celular}}" name="idCelular">
                                        <button class="btn waves-effect waves-light yellow darken-3" type="submit"
                                                name="action">Quitar
                                            chofer asignado<i class="material-icons right">send</i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{/listadoDeCelularesPosiblesAModificar}}


                {{#mostrarDatosDelCelularConcretoAModificar}}
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="card black darken-1">
                                <div class="card-content white-text">
                                    <form method="POST" action="/supervisor/modificarCelularConcreto">
                                        <div class="card-content">
                                            <h3 class="orange-text">Modificar Celular</h3>
                                            <div class="form-field">
                                                <div class="form-field">
                                                    <label for="numeroCelular">Numero Celular:</label>
                                                    <input type="text" id="numeroCelular" name="numeroCelular"
                                                           class="white-text" value="{{nro}}"
                                                           required>
                                                </div>
                                                <br>
                                                <div class="card-action">
                                                    <input type="hidden" name="idCelular" value="{{id_celular}}">
                                                    <button class="btn waves-effect waves-light yellow darken-2"
                                                            type="submit"
                                                            name="action">Modificar Celular
                                                        <i class="material-icons right">send</i>

                                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{/mostrarDatosDelCelularConcretoAModificar}}


        {{#mostrarCelularesSinAsignacionDeChofer}}
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card black darken-1">
                        <div class="card-content white-text">
                            <span class="card-title"><strong>Celular:</strong> {{nro}} </span>
                        </div>
                        <div class="card-action">
                            <form action="/supervisor/asignarCelularAChofer" method="post">
                                <div class="input-field col s12">
                                    <select name="usuario" required>
                                        <option value="" disabled selected>Sin chofer asignado</option>
                                        {{#choferesSinCelularAsignado}}
                                        <option value="{{usuario}}">{{nombre_completo}}</option>
                                        {{/choferesSinCelularAsignado}}
                                    </select>
                                    <label>Seleccione un chofer</label>
                                </div>
                                <input type="hidden" value="{{id_celular}}" name="idCelular">
                                <button class="btn waves-effect waves-light yellow darken-2" type="submit"
                                        name="action">Asignar
                                    <i class="material-icons right">send</i>
                                </button>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{/mostrarCelularesSinAsignacionDeChofer}}


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