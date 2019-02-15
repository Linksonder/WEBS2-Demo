<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    function Index()
    {
        $pokemons = ["Pikachu", "Bulbasaur"];
        return view('pokemons');
    }
}
