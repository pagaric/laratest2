@extends('templates/template')

@section('title')
test flash
@endsection

@section('contenu')
<h1>Départ message flash</h1>
<a href="{{route('arrivee')}}">vers page arrivée</a>

{{session()->flash('success', 'message de success')}};

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ipsa numquam animi iusto eos quibusdam accusamus nihil labore illum, ad, sint iure cumque, natus iste. Repellat ullam unde doloremque est.</p>

@endsection