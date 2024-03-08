@extends('templates.layout')

@section('title', 'Prodotti')

@section('sidebar')
    @parent
    <p>altri contenuti della sidebar</p>
@endsection
<?php 
print_r($products) 
 ?>
@section('content')
    <h2>Prodotti</h2>

    <x-products-table :products="$products" /> 
    {{-- con doppi apici e tutto attaccato sennò non funzia --}}

@endsection
