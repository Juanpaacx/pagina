<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TALAVERA DEL ANGEL</title>
    <!--
    <link rel="stylesheet" href="estilos/ss.css">
-->


<
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!--<link rel="stylesheet" type="text/css" href="{{asset('estilos/ss.css')}}">-->


    <!-- custom css file link  -->
    
   <link rel="stylesheet" href="/estilos/ss.css">

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/Facebook/FB_IMG_1670090150947.jpg" alt="">
    </a>
 
    <nav class="navbar">
        <a href="/rutaHome">Inicio</a>
        <a href="/rutaAbout">Acerca de</a>
        <a href="/rutaproductosP">Productos</a>
        <a href="/rutaCon">contactanos</a>
        <a href="/rutaL">login</a>
        <a href="/rutaMostrar">Tabla</a>
        <a href="/rutaPre">Preguntas Frecuentes</a>
        <a href="/fuera">cerrar seccion</a>
        @if(session('admin'))
        <a href="/rutaRegistroP">Agregar</a>
@endif

        <!-- <a href="#blogs">blogs</a>-->
    </nav>
    
    <div class="icons">
    <a href="/rutaCarrito" class="fas fa-shopping-cart"> </a>
    </div>
</header>

    <div id="seccion">
        @yield('seccion')
        
    <div id="r">
        @yield('r')
</div>
<div id="formulariooo">
        @yield('formulariooo')
</div>


<div id="productos">
        @yield('productos')
</div>
<div id="deta">
        @yield('deta')
</div>


<div id="home">
        @yield('home')
</div>


<div id="about">
        @yield('about')
</div>


<div id="login">
        @yield('login')
</div>

<div id="Pre">
        @yield('Pre')
</div>

<div id="pro">
        @yield('pro')
</div>
<div id="most">
        @yield('most')
</div>
<div id="carrito">
        @yield('carrito')
</div>

<div id="contact">
        @yield('contact')
</div>

<div id="agregarProductos">
        @yield('agregarProductos')
</div>


<div id="seccionGaleria">
        @yield('seccionGaleria')
</div>


<!-- contact section ends -->

<!-- blogs section starts  -->


<!-- blogs section ends -->

<!-- footer section starts  -->


<!-- footer section ends -->

<footer class="footer">

    <div class="share">
        <a href="https://www.facebook.com/people/Talavera-del-angel/100064359564784/" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/Talaveradlangel" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/talaveradelangel/" class="fab fa-instagram"></a>
        
    </div>
    <h1 style="color:#fff;">Derechos reservados :Juan Pablo Coyotl Xaxalpa <img src="/images/dere.png" style=" height:50px; width:60px;"></h1>
    <div class="links">
    
    <a href="#home">Inicio</a>
        <a href="#about">Acerca de</a>
        <a href="#menu">Productos</a>
        <a href="#products">Otros Productos</a>
      <!--  <a href="#review">review</a>-->
        <a href="#contact">contactos</a>
       
      
    </div>


</footer>

</body>

</html>