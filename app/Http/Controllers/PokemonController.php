<?php

namespace App\Http\Controllers;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function createPokemon(Request $request)
    {
        foreach ($request->results as $pokemon) {
            Pokemon::create([
                'name' => $pokemon['name'],
                'url' => $pokemon['url'],
            ]);
        }

    }

    public function getPokemon()
    {
        return ['data' => Pokemon::get()];
    }
}
