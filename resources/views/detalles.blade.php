@extends('principal')
@section('deta')
<style>
    tr{
        color:#fff;
       padding:
    }
    table{
    width: 100%;
    height: 300%;
    padding-top: 80px;
    font-size: 24px;
    text-align: justify;
}
h1{
    color:#fff;
    padding-top: 60px;
    font-size: 39px;
}
</style>
<h1> Detalle de producto<h1>
@if(session('status'))
    {{'status'}}
@endif
 <table border="6">
    <tr>
         <td> {{$producto->nombre}}</td>
         <td>{{$producto->precio}}</td>
        <td> {{$producto->descripcion}}</td>
        <tr>
</table>
<a href="{{url('rutaMostrar')}}">
@stop