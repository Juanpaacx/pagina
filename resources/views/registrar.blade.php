<link rel="stylesheet" href="/estilos/stylere.css">
<script src="/javascript/ooo.js"></script>

@extends('principal')
@section('r')



<div id="flotante" action="" class="wrapper">

    <div class="login_form is_closed">
        <div class="left_side">
            <div class="content">
                <h1>Talavera <br> del <br>Angel</h1>
                <p>En manos de los artesanos surgen obras maestras-</p>
                <div class="login">
                    <p>Registrarme</p>
                    <div class="social_login">
                        <a href="{{url('rutaL')}}" class="google">
                            <i class="fa fa-google"></i>
                            <span>Ingresar con correo</span>
                        </a>
                        <a href="#" class="fb">
                            <i class="fa fa-facebook"></i>
                            <span>Login with Facebook</span>
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

            <form >
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="apellido" placeholder="Apelido">
                <input type="text" name="nombreu"  placeholder="Usuario">
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
            <h3>Registro</h3>
                <p>No tengo una cuenta&nbsp;</a>si no estas resgistrado podras hacerlo aqui,Esto tomara unos minutos.</p>
            </div>

        

            <form action="{{route('AgregarUsuarios')}}" method= "POST">
                @csrf
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="apellido" placeholder="Apelido">
                <input type="text" name="user"  placeholder="Usuario">
                <input type="password" name="contraseña"  placeholder="Contraseña">
                <div class="password">
                    
                    <a href="#">Forgot Password?</a>
                </div>
                <input type="Submit" name="Registrarme" value="acept"
                >
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script><br>
                
            </form>
        </div>
    </div>
</div> 
@stop