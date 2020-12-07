{{> headerSupervisor}}

{{#listado}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Numero: {{id_proforma}}</span>
                    <p><strong>Fecha:</strong> {{fecha}}</p>
                    <p><strong>Origen:</strong> {{viaje_origen}}</p>
                    <p><strong>Destino:</strong> {{viaje_destino}}</p>
                    <p><strong>Denominacion:</strong> {{cliente_denominacion}}</p>
                </div>
                <div class="card-action">
                    {{#detalle}}
                    <form action="/proforma/mostrarDetalle" method="post">
                        <input type="hidden" value="{{id_proforma}}" name="id_proforma">
                        <button class="btn waves-effect waves-light orange darken-2" type="submit"
                                name="action">Ver detalle<i
                                    class="material-icons right">send</i></button>
                    </form>
                    {{/detalle}}
                    {{#eliminar}}
                    <form action="/proforma/eliminar" method="post">
                        <input type="hidden" value="{{id_proforma}}" name="id_proforma">
                        <button class="btn waves-effect waves-light orange darken-2" type="submit"
                                name="action">Eliminar<i
                                    class="material-icons right">send</i></button>
                    </form>
                    {{/eliminar}}
                    {{#modificar}}
                    <form action="/proforma/obtenerDatos" method="post">
                        <input type="hidden" value="{{id_proforma}}" name="id_proforma">
                        <button class="btn waves-effect waves-light orange darken-2" type="submit"
                                name="action">Modificar<i
                                    class="material-icons right">send</i></button>
                    </form>
                    {{/modificar}}
                </div>
            </div>
        </div>
    </div>
</div>
{{/listado}}

{{> footer}}

<script>

    window.onload = async () => {
        await getClientes();
    }

    const getClientes = async() => {
        let response = await axios.post("proforma/getClientes",{})
        console.log(response)
    }

</script>
