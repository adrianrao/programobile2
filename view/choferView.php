{{> header}}
<style>
    body{
        background-color: #b0a9a9;
        color: #fff;
    }
    .login{
        margin-top: 100px;
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
    .login p{
        margin-top: 1em;
    }
</style>

<nav >
    <div style="padding: 0 10px !important" class="nav-wrapper black">
        <a href="#" class="brand-logo">Bienvenido {{usuario}}</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">

            <li><a  class="btn red darken-2" href="/administrador/cerrarSesion">Cerrar sesión</a></li>
        </ul>
    </div>
</nav>
</header>



{{#mensaje}}
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Usuario: {{usuario}}</span>
                    <p><strong>Rol:</strong> {{descripcion}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{/mensaje}}

{{#completarTipoDeLicenciaYCelular}}
<div class="row login">
    <div class="col s12 m4 offset-m4">
        <div class="card">
            <div class="card-action gray accent-4 orange-text">
                <h3>Cargar tipo de licencia y celular</h3>
            </div>
            <form method="POST" action="/camionero/cargarLicenciaYCelular">
                <div class="card-content">

                    <div class="form-field">
                        <label for="tipoLicencia">Tipo de licencia:</label>
                        <input type="text" id="tipoLicencia" name="tipoLicencia" class="white-text" required>
                    </div><br>

                    <div class="form-field">
                        <label for="celular">Numero de celular:</label>
                        <input type="text" id="celular" name="celular" class="white-text" required>
                    </div><br>

                    <div class="form-field center-align">
                        <button type="submit" class="btn-large black accent-4">Cargar</button>
            </form>

        </div>

{{/completarTipoDeLicenciaYCelular}}


{{> footer}}