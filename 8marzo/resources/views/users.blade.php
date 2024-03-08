@extends('templates.layout')

@section('title', 'Nuovo titolo')

@section('sidebar')
    @parent
    <p>altri contenuti della sidebar</p>
@endsection

@section('content')
    <h5>contenuto della pagina</h5>
@endsection

<x-alert />