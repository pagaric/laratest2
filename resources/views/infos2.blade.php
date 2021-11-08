@extends('templates/template')

@section('title')
Utilisateurs
@endsection

@section('contenu')
<h1>Page arrivée</h1>

@isset($nom)
    <p>Bonjour {{$nom}} !</p>
@endisset

@if (session()->has('success'))
    {{ session()->get('success') }}    
@endif

@endsection