@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h3>Sistemas de administración de bodegas y servicios<span class="align-middle"></h3>
<br>
<h4>notas....</h4>
<li>aqui podria ir por ej, un resumen de cantidad de clientes, productos, g.entrega, g.recepcion por cewntro de costo (tipo dashboard)</li>
<li>tabla para comunas Y ciudades para asociarlo a clientes</li>
<li>los productos van al; contrato, bodega o cliente ?</li>
<li>campo MT2 en bodega y en todo lado donde se utilice debe ser la multiplicacion de LARGO * ANCHO</li>
<li>el Contrato como llave va, aparte del folio: CCosto/Cliente/Bodega</li>
@endsection
