{{> header}}

<div class="row login">
    <div class="col s12 m4 offset-m4">
        <div class="card">
            <div class="card-action gray accent-4 orange-text">
                <h3>Carga de combustible</h3>
            </div>
            <form method="POST" action="/chofer/procesarCargaCombustible">
                <div class="card-content">

                    <div class="form-field">
                        <label for="cantidad_litros">Cantidad de litros:</label>
                        <input type="number" id="cantidad_litros" name="cantidad_litros" class="white-text" required>
                    </div>
                    <br>

                    <div class="form-field">
                        <label for="importe">Importe:</label>
                        <input type="number" id="importe" name="importe" class="white-text" required>
                    </div>
                    <br>

                    <div class="form-field">
                        <label for="lugar">Lugar:</label>
                        <input type="text" id="lugar" name="lugar" class="white-text" required>
                    </div>



                    <div class="form-field center-align">
                        <button type="submit" class="btn-large black accent-4">Cargar</button>
            </form>

        </div>
        {{> footer}}