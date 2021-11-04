@extends('templates/template')

@section('title')
Article
@endsection

@section('contenu')
<h1>Liste des articles</h1>
<p><a href="{{ route('articles.liste') }}">Retour liste articles</a></p>

<h1>Article n° {{ $id }}</h1>
<p>{{$nom}} a écrit ...... Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, odio minima? Voluptatum commodi molestias quaerat fugiat. Provident fugit, molestias, nisi rem totam ut quaerat dolore eaque tempora laboriosam quae ratione.</p>
@endsection