@extends('templates/template')

@section('title')
Employees
@endsection

@section('contenu')
<h1>Les employés</h1>

{{ dd($emp) }}
<ul>
    @foreach ($emp as $item)
        <li>{{ $item->ENAME }} - {{$item->EMPNO}}</li>
    @endforeach
</ul>

@endsection