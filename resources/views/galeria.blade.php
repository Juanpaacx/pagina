<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- aqui empieca el bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Minified JS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--aqui termina el botstrap-->

@extends('principal')
@section('seccionGaleria')

<section class="Desli" id="Desli">

<h1 class="heading"> nuestro <span>blog</span> </h1>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img class="ppp" src="/images/Facebook/FB_IMG_1670089245256.jpg" alt="">
            <div class="carousel-caption">
                <h3>Juego de cafe</h3>
                <p>Juego de cafe con diseño de gato</p>
            </div>
        </div>

        <div class="item">
            <img class="ppp" src="/images/i2.jpeg" alt="">
            <div class="carousel-caption">
                <h3>Semi vajilla</h3>
                <p>Diseño:plumeado en color blanco</p>
            </div>
        </div>

        <div class="item">
            <img class="ppp" src="/images/Facebook/i3.jpeg" alt="">
            <div class="carousel-caption">
                <h3>Vajilla</h3>
                <p>para 7 personas</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


</section>
   
 
@stop