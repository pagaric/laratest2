@extends('templates/template')

@section('title')
Articles
@endsection

@section('contenu')
<h1>Liste des articles</h1>
<p><a href="{{ route('accueil') }}">Retour à l'accueil</a></p>

<ul>
    @foreach ($noms as $k => $nom)
        <li><a href="{{ route('article', ['n' => $k]) }}">Article de {{ $nom }}</a></li>
    @endforeach
</ul>
@endsection