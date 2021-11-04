@extends('templates/template')

@section('title')
    Accueil
@endsection

@section('contenu')
    <h1>Accueil de mon super blog</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius quam error vero, modi provident ipsam magnam consequuntur temporibus! Facere, beatae? Excepturi error sint nulla. Quisquam ex rem illum officiis labore.</p>
    <p><a href="{{route('articles.liste')}}">Liste des articles</a></p>
@endsection