@extends('templates/template')

@section('title')
emp by name
@endsection

@section('contenu')
<h1>Sélection d'un employé</h1>
<form action="{{ route('empByName') }}" method="post">
    @csrf {{-- protection csrf --}}
    <select name="nom">
        @foreach ($data as $item)
            <option value="{{ $item->ename }}">{{ $item->ename }}</option>
        @endforeach
    </select>
    
    <input type="submit" value="Envoyer !">
</form>
<a href="{{route('empSelect')}}">Reset</a>

@isset($infos)
    <hr>
    <ul>
        <li>Nom : {{$infos[0]->ENAME}}</li>
        <li>Job: : {{$infos[0]->JOB}}</li>
        <li>Salaire: : {{$infos[0]->SAL}}</li>
    </ul>
@endisset

@endsection