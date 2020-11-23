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

        </div><br>

        {{#notificacion}}
        <p class="error center-align {{colorNotificacion}}-text ">{{notificacion}}</p>
        {{/notificacion}}
    </div>
</div>
</div>
</div>





{{> footer}}

</html>