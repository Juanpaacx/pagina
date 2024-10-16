@extends('principal')
@section('contact')

<section class="contact" id="contact">

<h1 class="heading"> <span>Quienes</span> Somos </h1>
<h1 class="heading"> <span>Nuestro</span> contacto </h1>

<div class="row">

   <!-- <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>-->
    <iframe class="map"src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15078.859814702864!2d-98.1802104!3d19.1201569!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x79434ec744922084!2sTalavera%20Del%20%C3%81ngel!5e0!3m2!1ses!2smx!4v1669486449252!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <form action="../connect.php" method="post">
        <h3>Contactanos</h3>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text" class="form-control" name="txtname"placeholder="nombre">
        </div>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text" class="form-control" name="txtape"placeholder="apellido">
        </div>
        <div class="inputBox">
            <span class="fas fa-envelope"></span>
            <input type="email" class="form-control" name="txtmail"placeholder="email">
        </div>
        <div class="inputBox">
            <span class="fas fa-star"></span>
            <input type="text" class="form-control" name="txtdirec"placeholder="Dirrecion">
        </div>
        <div class="inputBox">
            <span class="fas fa-phone"></span>
            <input type="text" class="form-control" name="txtnum"placeholder="number">
        </div>
        <div class="inputBox">
            <span class="fas fa-eye"></span>
            <input type="text" class="form-control" name="txtcoment"placeholder="¿Como podemos ayudarte?">
        </div>
        <input type="submit" id="BtnEmviar" value="contactanos Haora" class="btn">
    </form>

</div>

</section>
@stop