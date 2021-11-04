<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public $result = [2 =>'Pierre', 67 => 'Paul', 6 =>'Jacques', 85 => 'Deep', 192 => 'Philippe'];

    public function getArticles()
    {
        // Je récupère mes articlezs en base de données
        // $this->result = résultat de ma requête
    }

    public function index()
    {
        return view('accueil');
    }

    public function showListArticles()
    {

        return view('articles', ['noms' => $this->result]);
    }

    public function show($n)
    {
        // return view('article')->with('id', $n)->with('nom', $this->result[$n]);
        // return view('article')->withId($n)->withNom($this->result[$n]);
        return view('article', ['id' => $n,
                                'nom' => $this->result[$n]]
        );
    }
}
