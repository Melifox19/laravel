<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRucheRequest;
use App\Http\Requests\UpdateRucheRequest;
use App\Repositories\RucheRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

//Ajout des dépendances perso
use Illuminate\Support\Facades\DB;
use App\Models\Rucher;
use App\Models\Mesure;
use App\Models\Meliborne;
use App\Models\User;
use Auth;

class RucheController extends AppBaseController
{
    /** @var  RucheRepository */
    private $rucheRepository;

    public function __construct(RucheRepository $rucheRepo)
    {
        $this->rucheRepository = $rucheRepo;
    }

    /**
     * Display a listing of the Ruche.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rucheRepository->pushCriteria(new RequestCriteria($request));


        if ( Auth::user()->role == 'admin' )
        {
            $ruches = $this->rucheRepository->all();
        }
        else
        {
          $ruches = User::find(Auth::user()->id)->ruches; // On affiche les ruches de l'utilisateur connecté

        }

        $ruchers = Rucher::all();

        return view('ruches.index')
            ->with('ruches', $ruches)
            ->with('ruchers', $ruchers);
    }

    /**
     * Show the form for creating a new Ruche.
     *
     * @return Response
     */
    public function create()
    {
      if ( Auth::user()->role == "admin")
      {
          $ruchers = Rucher::all();
          $melibornes = Meliborne::all();
      }
      else
      {
        $ruchers = User::find(Auth::user()->id)->ruchers; // Si utilisateur on affiche seulement ses ruchers
          $melibornes = User::find(Auth::user()->id)->melibornes; // On affiche les mélibornes de l'utilisateur connecté
      }

        return view('ruches.create')
        ->with('ruchers', $ruchers)
        ->with('melibornes', $melibornes);
    }

    /**
     * Store a newly created Ruche in storage.
     *
     * @param CreateRucheRequest $request
     *
     * @return Response
     */
    public function store(CreateRucheRequest $request)
    {
        $input = $request->all();

        $ruche = $this->rucheRepository->create($input);

        Flash::success('Ruche créé avec succès');

        return redirect(route('ruches.index'));
    }

    /**
     * Display the specified Ruche.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ruche = $this->rucheRepository->findWithoutFail($id);
        $rucher = Rucher::find($ruche->idRucher);
        $mesure = Mesure::where('idRuche', $id)->orderBy('horodatageMesure', 'ASC')->get();

        if (empty($ruche)) {
            Flash::error('Informations introuvables');

            return redirect(route('ruches.index'));
        }

        $chart = $this->chart('hchart', $mesure);

        return view('ruches.show')
        ->with('ruche', $ruche)
        ->with('rucher', $rucher)
        ->with('chart', $chart)
        ->with('mesure', $mesure);
    }

    /**
    * Génère un script highcharts
    * @param $renderid ID css sur lequel afficher le graphe
    * @param $dataIn Requête sql de mesures
    *
    * @return $lChart
    **/
    public function chart($renderid, $dataIn) {

        $dataOut = array();
        foreach ($dataIn as $data) {
            $dataOut[] = array(strtotime($data->horodatageMesure) * 1000, $data->temperatureInt);
        }

        //Laravel Highchart
        date_default_timezone_set('UTC');
        $lChart = \Chart::title([
              'text' => 'Température Méliruche',
            ])
            ->chart([
              'type'     => 'spline', // pie , columnt ect
              'renderTo' => $renderid, // render the chart into your div with id
              'width' => '800'
            ])
            ->subtitle([
              'text' => 'Température intérieure', //sous-titre du tableau
            ])
            ->colors([
              '#0c2959'
            ])
            ->xaxis([
              'type' => 'datetime',
              'dateTimeLabelFormats' => [
                'hour' => '%H : %M.'
              ],
              'title' => [
                'text' => 'Date'
              ]
          ])
          ->yaxis([
            'text' => 'Temp.',
          ])
          ->legend([
            'layout'        => 'vertical',
            'align'         => 'right',
            'verticalAlign' => 'bottom',
          ])
          ->series(
             [
               [
                 'name'  => 'Température',
                 'data'  => $dataOut,
               ],
             ])
          ->display();
        return $lChart;
    }


    /**
     * Show the form for editing the specified Ruche.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
      if ( Auth::user()->role == "admin")
      {
          $ruchers = Rucher::all();
          $melibornes = Meliborne::all();
      }
      else
      {
        $ruchers = User::find(Auth::user()->id)->ruchers; // Si utilisateur on affiche seulement ses ruchers
          $melibornes = User::find(Auth::user()->id)->melibornes; // On affiche les mélibornes de l'utilisateur connecté
      }

        $ruche = $this->rucheRepository->findWithoutFail($id);

        if (empty($ruche)) {
            Flash::error('Informations introuvables');

            return redirect(route('ruches.index'));
        }

        return view('ruches.edit')
        ->with('ruche', $ruche)
        ->with('ruchers', $ruchers)
        ->with('melibornes', $melibornes);
    }

    /**
     * Update the specified Ruche in storage.
     *
     * @param  int              $id
     * @param UpdateRucheRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRucheRequest $request)
    {
        $ruche = $this->rucheRepository->findWithoutFail($id);

        if (empty($ruche)) {
            Flash::error('Impossible de modifier la ruche');

            return redirect(route('ruches.index'));
        }

        $ruche = $this->rucheRepository->update($request->all(), $id);

        Flash::success('Ruche modifié avec succès');

        return redirect(route('ruches.index'));
    }

    /**
     * Remove the specified Ruche from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ruche = $this->rucheRepository->findWithoutFail($id);

        if (empty($ruche)) {
            Flash::error('Impossible de supprimer la ruche');

            return redirect(route('ruches.index'));
        }

        $this->rucheRepository->delete($id);

        Flash::success('Ruche supprimé avec succès');

        return redirect(route('ruches.index'));
    }
}
