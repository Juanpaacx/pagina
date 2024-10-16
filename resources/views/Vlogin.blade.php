<link rel="stylesheet" href="/estilos/stylere.css">
<script src="/javascript/ooo.js"></script>

@extends('principal')
@section('login')



<div id="flotante" action="" class="wrapper">

    <div class="login_form is_closed">
        <div class="left_side">
            <div class="content">
                <h1>Talavera <br> del <br>Angel</h1>
                <p>En manos de los artesanos surgen obras maestras-</p>
                <div class="login">
                    <p>ingresar</p>
                    <div class="social_login">
                        <a href="#" class="google">
                            <i class="fa fa-google"></i>
                            <span>Ingresar </span>
                        </a>
                        <a href="{{url('rutaR')}}" class="fb">
                            <i class="fa fa-facebook"></i>
                            <span>Registrarme</span>
                        </a>
                       
                    </div>
                </div>
                
            </div>
         </div>
         <div class="right_side">
            <a href="#" class="close"></a>
            <div class="heading">
                <h3>Registro</h3>
                <p>No tengo una cuenta&nbsp;</a>si no estas resgistrado podras hacerlo aqui,Esto tomara unos minutos.</p>
            </div>

            <form>
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="apellido" placeholder="Apelido">
                <input type="text" name="correo"  placeholder="Correo">
                <input type="password" name="contra"  placeholder="Contraseña">
                <div class="password">
                    <div class="cbox">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="right_side">
           
            <div class="heading">
                <h3>Login</h3>
                <p>No tengo una cuenta&nbsp;<a href="{{url('rutaR')}}">">si no estas resgistrado podras hacerlo aqui</a>Esto tomara unos minutos.</p>
                
            </div>

        



            <form action="/admin">
                @csrf
                <input type="text" name="Usuario"  placeholder="Correo">
                <input type="password" name="Contraseña"  placeholder="Contraseña">
                <div class="password">
                    <div class="cbox">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <a href="#">Forgot Password?</a>
                </div>
                
                <input  type="submit" name="enviar" value="aceptar">
            

                    </form>
        </div>
    </div>
</div> 


@stop