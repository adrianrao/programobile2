{{> header}}
{{#traerPosiblesServiceAModificar}}

<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <form method="POST" action="/encargadoDeTaller/mostrarFormularioModificarService">

                        <div class="card-content">
                            <div class="form-field">
                                <label for="id_service">Nro Service</label>
                                <input type="text" id="id_service" name="id_service" value="{{id_service}}" class="white-text" disabled  required>
                            </div>

                            <div class="form-field">
                                <label for="descripcion">Descripcion</label>
                                <input type="text" id="descripcion" name="descripcion" value="{{descripcion}}" class="white-text" disabled  required>
                            </div>
                        </div>

                        <div class="card-action">
                        <input type="text" id="id_service" name="id_service" value="{{id_service}}" class="white-text" hidden>
                        <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action">Modificar<i
                                class="material-icons right">send</i></button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

{{/traerPosiblesServiceAModificar}}
{{> footer}}
