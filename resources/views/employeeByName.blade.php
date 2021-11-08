@extends('templates/template')

@section('title')
Employé par nom
@endsection

@section('contenu')
<h1>Employé par nom</h1>

<form action="{{ route('emp.detail') }}" method="post">
    @csrf
    <input type="text" name='nom'>
    <input type="submit" value="Envoyer">
</form>

@isset($data)
{{ dd($data) }}
    <hr>
    {{ $data[0]->ENAME }} - {{ $data[0]->SAL }}
@endisset

@endsection