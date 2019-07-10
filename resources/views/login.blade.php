@extends('HederAndFooter')


@section('contenido')

<div class="bodyPageManta">
    <img src="img/logoRemextiven.png" style="width:20%;" alt="Remextiven"/>
    <div class="loginFijo">      
        <h2>Bienvenido, inicia sesión</h2>
        <p>¿Eres nuevo?  <a href="#">Regístrate</a></p>


        <div class="form-group">
                <span class="iconoInterno" id="basic-addon1"><img src="img/icons/man-user.png" alt="@"/></span>
                <input type="text" class="form-control inputIconoInterno" placeholder="Ingresa tu Usuario">
                <p class="errorInput"></p>
        </div>

        <div class="form-group">
                <span class="iconoInterno" id="basic-addon1"><img src="img/icons/key.png" alt="@"/></span>
                <input type="text" class="form-control inputIconoInterno" placeholder="Ingresa tu Usuario">
                <p class="errorInput"></p>
        </div>

        <p id="error"></p>

        <button class="btn btn-success btnCircle mt-4" type="submit">Iniciar Sesion</button>
        <p><a href="#">Olvidé mi contraseña</a></p>

        <hr class="lineaCortante"/>
        <p>Al continuar, estarás aceptando nuestros <a href="#">Términos y condiciones</a></p>







    </div>
</div>

@endsection