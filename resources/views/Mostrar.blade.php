

@extends('principal')
@section('most')

<style>
table{
    width: 100%;
    height: 300%;
    padding-top: 60px;
    font-size: 19px;
    text-align: justify;
}

th{
    color: #fff;
}
a {
    color: #1dabff;
}
</style>
<table>
<tr>
<th>Codigo</th></th>
<th>Nombre</th><br>
<th >Precio</th><br>
<th >Cantidad</th><br>
<th >Descripcidn</th><br>
<th >Fotografia</th>
</tr>
@foreach ($productos as $producto)
<tr>

<td>{{$producto->id}}</td>
<td>{{$producto->nombre}}</td>
<td>{{$producto->precio}}</td>
<td>{{$producto->cantidad}}</td>
<td>{{$producto->descripcion}}</td>
<td>{{$producto->foto}}</td>
<td><img height="100px" width="110px" src='imagenes/{{$producto->foto}}'></td>

<td> <a href="{{url('AgregarCarrito/'.$producto->id)}}"> Agregar al Carrito</a> </td>
<td> <a href="{{url('rutaDetalle/' .$producto->id)}}">Descripcién del producto</a> </td>
</tr>
@endforeach
<a href="{{url('rutaCarrito')}}"> 
</table>                 
@stop
