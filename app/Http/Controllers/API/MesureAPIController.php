<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Mesure;

class MesureAPIController extends AppBaseController
{
    public function index()
    {
        return Mesure::all();
    }

    public function store(Request $request) {
        // on suppose que la requête a été formulée correctement en JSON
        $attributs = $request->toArray();
        // on crée un article à partir du tableau d'atributs
        $mesure = Mesure::create($attributs);
        // on retourne l'article créé et un code réponse 201 (created)
        return response()->json($mesure, 201);
    }

}
