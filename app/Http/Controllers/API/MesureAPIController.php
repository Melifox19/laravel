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

  public function store(Request $request)
  {
    // on suppose que la requête a été formulée correctement en JSON
    $data = $request->toArray();













    switch ($data['typ'])
    {
      case '00': //Envoie de données Méliruches --------------------------------------------------------
      $idSigfox = $data['idSigfox'];

      // On cherche la Meliborne correspondante à l'ID Sigfox
      $meliborne = Meliborne::where('idSigfox', $idSigfox)->first();

      if (isset($meliborne)) // Si on trouve une Meliborne
      {
        // On recherche la ruche correspondante à l'addresse Melinet de la Meliborne trouvé
        $ruche = Ruche::where('addrMelinet', $data['addrMelinet'])->where('idMeliborne', $meliborne->id)->first();

        if(isset($ruche)) // Si on trouve une Ruche
        {
          // On créé une entrée dans la table de mesure avec les mesures reçues
          $mesure = Mesure::create([
            'horodatageMesure' => $data['horodatageMesure'],
            'masse' => $data['masse'],
            'temperatureInt' => $data['temperatureInt'],
            'temperatureExt' => $data['temperatureExt'],
            'humiditeInt' => $data['humiditeInt'],
            'pression' => $data['pression'],
            'niveauBatterie' => $data['niveauBatterie'],
            'idRuche' => $ruche->id
          ]);

          // On vérifie si les valeurs ne sont pas trop critiques pour pouvoir créer l'alerte
          if ($mesure->masse > 70)
          {
            $alerte = $alerte = Alerte::create([
              'horodatageAlerte' => date("Y-m-d H:i:s"),
              'type' => 'mesure',
              'description' => 'Masse elevee',
              'idRuche' => $mesure->idRuche
            ]);
          }
          if ($mesure->masse < 20)
          {
            $alerte = Alerte::create([
              'horodatageAlerte' => date("Y-m-d H:i:s"),
              'type' => 'mesure',
              'description' => 'Masse faible',
              'idRuche' => $mesure->idRuche
            ]);

          }
          if ($mesure->masse < 0)
          {
            $alerte = Alerte::create([
              'horodatageAlerte' => date("Y-m-d H:i:s"),
              'type' => 'vol',
              'description' => 'Ruche non detectee',
              'idRuche' => $mesure->idRuche
            ]);
          }

          // ------------ Température intérieure ---------------

          if ($mesure->temperatureInt > 36)
          {
            $alerte = Alerte::create([
              'horodatageAlerte' => date("Y-m-d H:i:s"),
              'type' => 'mesure',
              'description' => 'Temperature interieure elevee',
              'idRuche' => $mesure->idRuche
            ]);
          }
          if ($mesure->temperatureInt < 30)
          {
            $alerte = Alerte::create([
              'horodatageAlerte' => date("Y-m-d H:i:s"),
              'type' => 'mesure',
              'description' => 'Temperature interieure faible',
              'idRuche' => $mesure->idRuche
            ]);
          }

          // --------- Température extérieure --------

          if ($mesure->temperatureExt > 40)
          {
            $alerte = Alerte::create([
              'horodatageAlerte' => date("Y-m-d H:i:s"),
              'type' => 'mesure',
              'description' => 'Temperature exterieure elevee',
              'idRuche' => $mesure->idRuche
            ]);
          }
          if ($mesure->temperatureExt < 0)
          {
            $alerte = Alerte::create([
              'horodatageAlerte' => date("Y-m-d H:i:s"),
              'type' => 'mesure',
              'description' => 'Temperature exterieure faible',
              'idRuche' => $mesure->idRuche
            ]);
          }

          // ----------------- Humidité intérieure -----------------

          if ($mesure->humiditeInt > 25)
          {
            $alerte = Alerte::create([
              'horodatageAlerte' => date("Y-m-d H:i:s"),
              'type' => 'mesure',
              'description' => 'Humidite interieure elevee',
              'idRuche' => $mesure->idRuche
            ]);
          }
          if ($mesure->humiditeInt < 20)
          {
            $alerte = Alerte::create([
              'horodatageAlerte' => date("Y-m-d H:i:s"),
              'type' => 'mesure',
              'description' => 'Humidite interieure faible',
              'idRuche' => $mesure->idRuche
            ]);
          }

          // ----------- Niveau de batterie --------

          if ($mesure->niveauBatterie < 30)
          {
            $alerte = Alerte::create([
              'horodatageAlerte' => date("Y-m-d H:i:s"),
              'type' => 'mesure',
              'description' => 'Batterie faible',
              'idRuche' => $mesure->idRuche
            ]);
          }

          // on retourne l'article créé et un code réponse 201 (created)
          return response()->json($mesure, 201);
        }
      }
      break;











      case '01': //Envoie de données Mélilabos ---------------------------------------------------------------

      $idSigfox = $data['idSigfox'];

      // On recherhce la Melilabo correspondante à l'ID Sigfox
      $ruche = Ruche::where('idSigfox', $idSigfox)->first();

      if (isset($ruche)) // Si on trouve une Melilabo
      {
        // On créé alors une entrée dans la table Mesure avec les données reçues
        $mesure = Mesure::create([
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
        ]);

        // On vérifie si les valeurs ne sont pas trop critiques pour pouvoir créer l'alerte
        if ($mesure->masse > 70)
        {
          $alerte = Alerte::create([
            'horodatageAlerte' => date("Y-m-d H:i:s"),
            'type' => 'mesure',
            'description' => 'Masse elevee',
            'idRuche' => $mesure->idRuche
          ]);
        }
        if ($mesure->masse < 20)
        {
          $alerte = Alerte::create([
            'horodatageAlerte' => date("Y-m-d H:i:s"),
            'type' => 'mesure',
            'description' => 'Masse faible',
            'idRuche' => $mesure->idRuche
          ]);

        }
        if ($mesure->masse < 0)
        {
          Alert::create([
            'horodatageAlerte' => date("Y-m-d H:i:s"),
            'type' => 'vol',
            'description' => 'Ruche non detectee',
            'idRuche' => $mesure->idRuche
          ]);
        }

        // ------------ Température intérieure -------------------

        if ($mesure->temperatureInt > 36)
        {
          $alerte = Alerte::create([
            'horodatageAlerte' => date("Y-m-d H:i:s"),
            'type' => 'mesure',
            'description' => 'Temperature interieure elevee',
            'idRuche' => $mesure->idRuche
          ]);
        }
        if ($mesure->temperatureInt < 30)
        {
          $alerte = Alerte::create([
            'horodatageAlerte' => date("Y-m-d H:i:s"),
            'type' => 'mesure',
            'description' => 'Temperature interieure faible',
            'idRuche' => $mesure->idRuche
          ]);
        }

        // ------------- Température extérieure ---------------

        if ($mesure->temperatureExt > 40)
        {
          $alerte = Alerte::create([
            'horodatageAlerte' => date("Y-m-d H:i:s"),
            'type' => 'mesure',
            'description' => 'Temperature exterieure elevee',
            'idRuche' => $mesure->idRuche
          ]);
        }
        if ($mesure->temperatureExt < 0)
        {
          $alerte = Alerte::create([
            'horodatageAlerte' => date("Y-m-d H:i:s"),
            'type' => 'mesure',
            'description' => 'Temperature exterieure faible',
            'idRuche' => $mesure->idRuche
          ]);
        }

        // ------------- Humidité intérieure ---------------------

        if ($mesure->humiditeInt > 25)
        {
          $alerte = Alerte::create([
            'horodatageAlerte' => date("Y-m-d H:i:s"),
            'type' => 'mesure',
            'description' => 'Humidite interieure elevee',
            'idRuche' => $mesure->idRuche
          ]);
        }
        if ($mesure->humiditeInt < 20)
        {
          $alerte = Alerte::create([
            'horodatageAlerte' => date("Y-m-d H:i:s"),
            'type' => 'mesure',
            'description' => 'Humidite interieure faible',
            'idRuche' => $mesure->idRuche
          ]);
        }

        // ------------- Humidité extérieure ------------------

        if ($mesure->humiditeExt > 25)
        {
          $alerte = Alerte::create([
            'horodatageAlerte' => date("Y-m-d H:i:s"),
            'type' => 'mesure',
            'description' => 'Humidite exterieure elevee',
            'idRuche' => $mesure->idRuche
          ]);
        }
        if ($mesure->humiditeExt < 20)
        {
          $alerte = Alerte::create([
            'horodatageAlerte' => date("Y-m-d H:i:s"),
            'type' => 'mesure',
            'description' => 'Humidite exterieure faible',
            'idRuche' => $mesure->idRuche
          ]);
        }

        // -------------- Niveau de batterie -------------

        if ($mesure->niveauBatterie < 30)
        {
          $alerte = Alerte::create([
            'horodatageAlerte' => date("Y-m-d H:i:s"),
            'type' => 'mesure',
            'description' => 'Batterie faible',
            'idRuche' => $mesure->idRuche
          ]);
        }

        // ------------ Débit Sonore (200Hz & 400 Hz) --------------

        if ($mesure->debitSonore200 > 190 && $mesure->debitSonore200 < 210)
        {
          $alerte = Alerte::create([
            'horodatageAlerte' => date("Y-m-d H:i:s"),
            'type' => 'mesure',
            'description' => 'Essaimage potentiel (200 Hz)',
            'idRuche' => $mesure->idRuche
          ]);
        }

        if ($mesure->debitSonore400 > 400 && $mesure->debitSonore400 < 500)
        {
          $alerte = Alerte::create([
            'horodatageAlerte' => date("Y-m-d H:i:s"),
            'type' => 'mesure',
            'description' => 'Essaimage potentiel (400 Hz)',
            'idRuche' => $mesure->idRuche
          ]);
        }

        // on retourne l'article créé et un code réponse 201 (created)
        return response()->json($mesure, 201);
      }
      break;













      case '10': //Envoie de données de géolocalisation ----------------------------------------------------------
      $idSigfox = $data['idSigfox'];

      // On cherche si l'ID est lié à une Méliborne
      $meliborne = Meliborne::where('idSigfox', $idSigfox)->first();
      if (isset($meliborne)) // Si on trouve une meliborne
      {
        $meliborne_insert = [
          'longitude' => $data['longitude'],
          'latitude' => $data['latitude'],
        ];

        // On modifie la géolocalisation de la Meliborne
        $meliborne_rslt = Meliborne::where('id', $meliborne->id)->update($meliborne_insert);

        // on retourne l'article créé et un code réponse 201 (created)
        return response()->json($meliborne_rslt, 201);
      }

      $ruche = Ruche::where('idSigfox', $idSigfox)->first();
      if (isset($ruche)) // Si non, on cherche si une mélilabo correspondante
      {
        $ruche_insert = [
          'longitude' => $data['longitude'],
          'latitude' => $data['latitude']
        ];

        // On modifie la géolocalisation de la Melilabo
        $ruche_rslt = Ruche::where('id', $ruche->id)->update($ruche_insert);

        // on retourne l'article créé et un code réponse 201 (created)
        return response()->json($ruche_rslt, 201);
      }
      break;









      case '11': //Non attribué... ------------------------------------------------------------------------------
      // code...
      break;

      default:
      // code...
      break;
    }
  }
}
