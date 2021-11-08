<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('infos');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required|min:3',
            'prenom' => 'required'
        ]);

        session()->flash('success', 'Formulaire validé');

        return view('infos2', ['nom' => $request->input('nom')]);

        // return 'Bonjour ' .$request->input('nom'). ' !';
        // dd($request->all());
    }
}
