<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlerteRequest;
use App\Http\Requests\UpdateAlerteRequest;
use App\Repositories\AlerteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Ruche;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Auth;

use Illuminate\Notifications\Notifiable;

class AlerteController extends AppBaseController
{
    /** @var  AlerteRepository */
    private $alerteRepository;

    use Notifiable;

    public function __construct(AlerteRepository $alerteRepo)
    {
        $this->alerteRepository = $alerteRepo;
    }

    /**
    * Display a listing of the Alerte.
    *
    * @param Request $request
    * @return Response
    */
    public function index(Request $request)
    {
        $this->alerteRepository->pushCriteria(new RequestCriteria($request));

        if(Auth::user()->role == 'admin')
        {

          $alertes = $this->alerteRepository->all();
        }
        else
        {
          $ruches = User::find(Auth::user()->id)->ruches;

          foreach ($ruches as $ruche)
          {
            $alertes[] = Alerte::where('idRuche', '=', $ruche->id);
          }

        }

        return view('alertes.index')
        ->with('alertes', $alertes);
    }

    /**
    * Show the form for creating a new Alerte.
    *
    * @return Response
    */
    public function create()
    {
      if ( Auth::user()->role == "admin") // Si admin on affiche tout les ruchers
      {
        $ruches = Ruche::all();
      }
      else
      {
        $ruches = User::find(Auth::user()->id)->ruche; // Si utilisateur on affiche seulement ses ruchers
      }

        return view('alertes.create')->with('ruches', $ruches);
    }

    /**
    * Store a newly created Alerte in storage.
    *
    * @param CreateAlerteRequest $request
    *
    * @return Response
    */
    public function store(CreateAlerteRequest $request)
    {
        $input = $request->all();

        $alerte = $this->alerteRepository->create($input);

        Flash::success('Alerte saved successfully.');

        return redirect(route('alertes.index'));
    }

    /**
    * Display the specified Alerte.
    *
    * @param  int $id
    *
    * @return Response
    */
    public function show($id)
    {
        $alerte = $this->alerteRepository->findWithoutFail($id);

        if (empty($alerte)) {
            Flash::error('Alerte not found');

            return redirect(route('alertes.index'));
        }

        return view('alertes.show')->with('alerte', $alerte);
    }

    /**
    * Show the form for editing the specified Alerte.
    *
    * @param  int $id
    *
    * @return Response
    */
    public function edit($id)
    {
        $alerte = $this->alerteRepository->findWithoutFail($id);

        if ( Auth::user()->role == "admin") // Si admin on affiche tout les ruchers
        {
          $ruches = Ruche::all();
        }
        else
        {
          $ruches = User::find(Auth::user()->id)->ruche; // Si utilisateur on affiche seulement ses ruchers
        }

        if (empty($alerte)) {
            Flash::error('Alerte not found');

            return redirect(route('alertes.index'));
        }

        return view('alertes.edit')->with('alerte', $alerte)->with('ruches', $ruches);
    }

    /**
    * Update the specified Alerte in storage.
    *
    * @param  int              $id
    * @param UpdateAlerteRequest $request
    *
    * @return Response
    */
    public function update($id, UpdateAlerteRequest $request)
    {
        $alerte = $this->alerteRepository->findWithoutFail($id);

        if (empty($alerte)) {
            Flash::error('Alerte not found');

            return redirect(route('alertes.index'));
        }

        $alerte = $this->alerteRepository->update($request->all(), $id);

        Flash::success('Alerte updated successfully.');

        return redirect(route('alertes.index'));
    }

    /**
    * Remove the specified Alerte from storage.
    *
    * @param  int $id
    *
    * @return Response
    */
    public function destroy($id)
    {
        $alerte = $this->alerteRepository->findWithoutFail($id);

        if (empty($alerte)) {
            Flash::error('Alerte not found');

            return redirect(route('alertes.index'));
        }

        $this->alerteRepository->delete($id);

        Flash::success('Alerte deleted successfully.');

        return redirect(route('alertes.index'));
    }
}
