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
<header>
    {{> navBarSupervisor}}
</header>

  </div>
    </div>
</form>


{{#listadoDeClientesAeliminar}}
<form action="/supervisor/eliminarCliente" method="post">
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="card black darken-1">
                    <div class="card-content white-text">
                        <input type="hidden" value="{{id_cliente}}" name="id_cliente">
                        <span class="card-title">Denominacion: {{denominacion}}</span>
                        <p><strong>Id cliente:</strong> {{id_cliente}}</p>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Eliminar Cliente
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
{{/listadoDeClientesAeliminar}}

{{#listarTodosLosPosiblesClientesAModificar}}
<form action="/supervisor/mostrarDatosDelClienteConcretoAModificar" method="post">
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="card black darken-1">
                    <div class="card-content white-text">
                        <input type="hidden" value="{{id_cliente}}" name="id_cliente">
                        <span class="card-title">Denominacion: {{denominacion}}</span>
                        <p><strong>Id cliente:</strong> {{id_cliente}}</p>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Modificar cliente
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
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