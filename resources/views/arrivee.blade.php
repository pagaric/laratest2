@extends('templates/template')

@section('title')
test flash
@endsection

@section('contenu')
<h1>Arrivée message flash</h1>
<a href="{{route('depart')}}">vers page départ</a>

@if (session()->has('success'))
        <p>{{ session()->get('success') }}</p>
    @elseif (session()->has('error'))
        <p>{{ session()->get('error') }}</p>
    @endif

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi doloribus quam, nisi eveniet magnam illum dolor delectus iste inventore sed nulla! Repellendus voluptatibus perferendis reiciendis quasi eveniet deleniti consequuntur pariatur!</p>

@endsection