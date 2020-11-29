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


{{#choferHabilitado}}
<nav >
    <div style="padding: 0 10px !important" class="nav-wrapper black">
        <a href="#" class="brand-logo">Chofer</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a  class="btn red darken-2" href="/administrador/cerrarSesion">Cerrar sesión</a></li>
            <li><a  class="btn red darken-2" href="/administrador/cerrarSesion">Prueba de habilitado</a></li>
        </ul>
    </div>
</nav>
</header>

{{/choferHabilitado}}


{{#faltaValidarLicenciaYORegistro}}

{{#mensaje}}
<nav >
    <div style="padding: 0 10px !important" class="nav-wrapper black">
        <a href="#" class="brand-logo">Bienvenido {{usuario}}</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a  class="btn red darken-2" href="/administrador/cerrarSesion">Cerrar sesión</a></li>
        </ul>
    </div>
</nav>
</header>

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

<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card black darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><strong>Licencia:</strong> {{tipo_de_licencia}}</span>
                    <p><strong>Celular:</strong> {{nro}}</p>
                    <p class="red-text">Aun faltan validar la licencia y/o asignar un celular, por favor, comuniquese con su supervisor</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{/faltaValidarLicenciaYORegistro}}


{{> footer}}