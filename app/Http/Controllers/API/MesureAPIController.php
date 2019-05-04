<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Mesure;
use App\Models\Alerte;
use App\Models\Meliborne;
use App\Models\Ruche;

class MesureAPIController extends AppBaseController
{
    public function index()
    {
        return Mesure::all();
    }

    public function update(Request $request)
    {
        $token = Str::random(60);
    }

    public function store(Request $request)
    {
        // on suppose que la requête a été formulée correctement en JSON
        $data = $request->toArray();

        switch ($data['typ'])
        {
            case '00': //Envoie de données Méliruches --------------------------------------------------------
            $idSigfox = $data['idSigfox'];

            $meliborne = Meliborne::where('idSigfox', $idSigfox)->first();

            $ruche = Ruche::where('addrMelinet', $data['addrMelinet'])->where('idMeliborne', $meliborne->id)->first();

            return response()->json($ruche->id, 201);

            $mesure = Mesure::create([
                'horodatageMesure' => $data['horodatageMesure'],
                'masse' => $data['masse'],
                'temperatureInt' => $data['temperatureInt'],
                'temperatureExt' => $data['temperatureExt'],
                'humiditeInt' => $data['humiditeInt'],
                'humiditeExt' => 'NULL',
                'pression' => $data['pression'],
                'niveauBatterie' => $data['niveauBatterie'],
                'debitSonore200' => 'NULL',
                'debitSonore400' => 'NULL',
                'idRuche' => $ruche->id
            ]);

            return response()->json($mesure, 201);


            // On vérifie si les valeurs ne sont pas trop critiques pour pouvoir créer l'alerte

            if ($attributs->masse > 70) // Si la masse est supérieure à 70 kg
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Masse elevee',
                    'idRuche' => $attributs->idRuche
                ]);
            }
            if ($attributs->masse < 20)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Masse faible',
                    'idRuche' => $attributs->idRuche
                ]);

            }
            if ($attributs->masse < 0)
            {
                Alert::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'vol',
                    'description' => 'Ruche non detectee',
                    'idRuche' => $attributs->idRuche
                ]);
            }

            // ------------ Température intérieure ---------------

            if ($attributs->temperatureInt > 36)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Temperature interieure elevee',
                    'idRuche' => $attributs->idRuche
                ]);
            }
            if ($attributs->temperatureInt < 30)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Temperature interieure faible',
                    'idRuche' => $attributs->idRuche
                ]);
            }

            // --------- Température extérieure --------

            if ($attributs->temperatureExt > 40)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Temperature exterieure elevee',
                    'idRuche' => $attributs->idRuche
                ]);
            }
            if ($attributs->temperatureExt < 0)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Temperature exterieure faible',
                    'idRuche' => $attributs->idRuche
                ]);
            }

            // ----------------- Humidité intérieure -----------------

            if ($attributs->humiditeInt > 25)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Humidite interieure elevee',
                    'idRuche' => $attributs->idRuche
                ]);
            }
            if ($attributs->humiditeInt < 20)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Humidite interieure faible',
                    'idRuche' => $attributs->idRuche
                ]);
            }

            // ----------- Niveau de batterie --------

            if ($attributs->niveauBatterie < 30)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Batterie faible',
                    'idRuche' => $attributs->idRuche
                ]);
            }

            // on retourne l'article créé et un code réponse 201 (created)
            return response()->json($mesure, 201);
            break;

            case '01': //Envoie de données Mélilabos ---------------------------------------------------------------

            $idSigfox = $data['idSigfox'];


            $ruche = Ruche::where('idSigfox', $idSigfox);

            $attributs = [
                'horodatageMesure' => $data['horodatageMesure'],
                'masse' => $data['masse'],
                'temperatureInt' => $data['temperatureInt'],
                'temperatureExt' => $data['temperatureExt'],
                'humiditeInt' => $data['humiditeInt'],
                'humiditeExt' => $data['humiditeExt'],
                'pression' => $data['pression'],
                'niveauBatterie' => $data['niveauBatterie'],
                'debitSonore200' => $data['debitSonore200'],
                'debitSonore400' => $data['debitSonore400'],
                'idRuche' => $ruche->id
            ];
            // on crée un article à partir du tableau d'atributs
            $mesure = Mesure::create($attributs);


            // On vérifie si les valeurs ne sont pas trop critiques pour pouvoir créer l'alerte

            if ($attributs->masse > 70) // Si la masse est supérieure à 70 kg
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Masse elevee',
                    'idRuche' => $attributs->idRuche
                ]);
            }
            if ($attributs->masse < 20)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Masse faible',
                    'idRuche' => $attributs->idRuche
                ]);

            }
            if ($attributs->masse < 0)
            {
                Alert::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'vol',
                    'description' => 'Ruche non detectee',
                    'idRuche' => $attributs->idRuche
                ]);
            }

            // ------------ Température intérieure -------------------

            if ($attributs->temperatureInt > 36)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Temperature interieure elevee',
                    'idRuche' => $attributs->idRuche
                ]);
            }
            if ($attributs->temperatureInt < 30)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Temperature interieure faible',
                    'idRuche' => $attributs->idRuche
                ]);
            }

            // ------------- Température extérieure ---------------

            if ($attributs->temperatureExt > 40)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Temperature exterieure elevee',
                    'idRuche' => $attributs->idRuche
                ]);
            }
            if ($attributs->temperatureExt < 0)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Temperature exterieure faible',
                    'idRuche' => $attributs->idRuche
                ]);
            }

            // ------------- Humidité intérieure ---------------------

            if ($attributs->humiditeInt > 25)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Humidite interieure elevee',
                    'idRuche' => $attributs->idRuche
                ]);
            }
            if ($attributs->humiditeInt < 20)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Humidite interieure faible',
                    'idRuche' => $attributs->idRuche
                ]);
            }


            // ------------- Humidité intérieure ------------------

            if ($attributs->humiditeExt > 25)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Humidite exterieure elevee',
                    'idRuche' => $attributs->idRuche
                ]);
            }
            if ($attributs->humiditeExt < 20)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Humidite exterieure faible',
                    'idRuche' => $attributs->idRuche
                ]);
            }

            // -------------- Niveau de batterie -------------

            if ($attributs->niveauBatterie < 30)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Batterie faible',
                    'idRuche' => $attributs->idRuche
                ]);
            }

            // ------------ Débit Sonore (200Hz & 400 Hz) --------------

            if ($attributs->debitSonore200 > 190 && $attributs->debitSonore200 < 210)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Essaimage potentiel (200 Hz)',
                    'idRuche' => $attributs->idRuche
                ]);
            }

            if ($attributs->debitSonore400 > 400 && $attributs->debitSonore400 < 500)
            {
                Alerte::insert([
                    'horodatageAlerte' => date("Y-m-d H:i:s"),
                    'type' => 'mesure',
                    'description' => 'Essaimage potentiel (400 Hz)',
                    'idRuche' => $attributs->idRuche
                ]);
            }

            // on retourne l'article créé et un code réponse 201 (created)
            return response()->json($mesure, 201);
            break;

            /*case '10': //Envoie de données de géolocalisation ----------------------------------------------------------
            $idSigfox = $data['idSigfox'];
            $ruche = Ruche::where('idSigfox', $idSigfox);

            $attributs = [
                'longitude' => $data['longitude'],
                'latitude' => $data['latitude'],
                'idRuche' => $ruche->id
            ];

            $mesure = Mesure::create($attributs);
            // on retourne l'article créé et un code réponse 201 (created)
            return response()->json($mesure, 201);
            break;

            case '11': //Non attribué... ------------------------------------------------------------------------------
            // code...
            break;

            default:
            // code...
            break;*/
        }
    }
}
