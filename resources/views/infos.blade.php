@extends('templates/template')

@section('title')
Utilisateurs
@endsection

@section('contenu')
<h1>Création utilisateur</h1>
<form action="{{ route('users.store') }}" method="post">
    @csrf {{-- protection csrf --}}
    <label for="nom">Entrez votre nom : </label>
    <input type="text" name="nom" id="nom">
    <label for="prenom">Entrez votre prénom : </label>
    <input type="text" name="prenom" id="prenom">
    <input type="submit" value="Envoyer !">
</form>

@error('nom')
    {{$message}}
@enderror

@error('prenom')
    {{$message}}
@enderror

@endsection