@extends('principal')
@section('carrito')

<h2> Carrito de compras </h2>
<br>

<?php  $valor =0 ?>
@if (session('carrito'))
<table id="tt">
    <th>Nombre </th>
    <th>Precio</th>
    <th>Cantidad </th>
    <th>Importe del producto </th>
</tr>
<?php $carrito = session('carrito'); ?>
@foreach($carrito as $detalle)
<?php $valor += $detalle['precio'] * $detalle['cantidad'];?>

    <tr>
        <td>{{$detalle['nombre']}} </td>
        <td>{{$detalle['precio']}} </td>
        <td>{{$detalle['cantidad']}} </td>
        <td>{{$detalle['precio'] * $detalle['cantidad']}} </td>

</tr>
@endforeach
</table> 
<br>
<p> Total {{$valor}}</p>
@endif

<br>
<br>
<br>
<br>
<br>

@stop