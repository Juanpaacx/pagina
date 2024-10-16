
@extends('principal')
@section('agregarProductos')

<style>
  form {
    position: fixed;
    padding-top: 100px;
    width: 200px;
    font-size: large;
    text-align: left;
    height: 50p;
    color:#fff
}
  </style>
<section class="agregar">
<form action="{{route('AgregarBD')}}" method= "POST" enctype="multipart/form-data" >

@csrf

Codigo :<input type="Text" name="codigo"><br>
Nombre :<input type="Text" name="nombre"><br>
Precio :<input type="Text" name="precio"><br>
Cantidad :<input type="Text" name="cantidad"><br>
Descripcion :<input type="Text" name="descripcion"><br>
Fotografia:<input type="file" name="foto" id="foto"><br>
<input type="Submit" name="enviar" value="aceptar"><br>

</form>
</section>
  @stop