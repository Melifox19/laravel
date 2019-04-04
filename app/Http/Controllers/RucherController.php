<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRucherRequest;
use App\Http\Requests\UpdateRucherRequest;

use App\Repositories\RucherRepository;

use App\Models\User;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RucherController extends AppBaseController
{
    /** @var  RucherRepository */
    private $rucherRepository;

    public function __construct(RucherRepository $rucherRepo)
    {
        $this->rucherRepository = $rucherRepo;
    }

    /**
    * Display a listing of the Rucher.
    *
    * @param Request $request
    * @return Response
    */
    public function index(Request $request)
    {
        $this->rucherRepository->pushCriteria(new RequestCriteria($request));

        if ( Auth::user()->role == 'admin' )
        {
            $ruchers = $this->rucherRepository->all();
        }
        else
        {
            $ruchers = User::find(Auth::user()->id)->ruchers;
        }

        $users = User::all();

        return view('ruchers.index')
        ->with('ruchers', $ruchers)
        ->with('users', $users);
    }

    /**
    * Show the form for creating a new Rucher.
    *
    * @return Response
    */
    public function create()
    {
        $users = User::all('id','name');

        return view('ruchers.create')
        ->with('users', $users);
    }

    /**
    * Store a newly created Rucher in storage.
    *
    * @param CreateRucherRequest $request
    *
    * @return Response
    */
    public function store(CreateRucherRequest $request)
    {
        $request->validate([
            "nom" => "required|min:5|max:50",
            "idApiculteur" => "required"
        ]);

        $input = $request->all();

        $rucher = $this->rucherRepository->create($input);

        Flash::success('Rucher créé avec succès');

        return redirect(route('ruchers.index'));
    }

    /**
    * Display the specified Rucher.
    *
    * @param  int $id
    *
    * @return Response
    */
    public function show($id)
    {
        $rucher = $this->rucherRepository->findWithoutFail($id);

        if (empty($rucher)) {
            Flash::error('Rucher introuvable');

            return redirect(route('ruchers.index'));
        }

        return view('ruchers.show')->with('rucher', $rucher);
    }

    /**
    * Show the form for editing the specified Rucher.
    *
    * @param  int $id
    *
    * @return Response
    */
    public function edit($id)
    {
        $rucher = $this->rucherRepository->findWithoutFail($id);

        if (empty($rucher)) {
            Flash::error('Rucher introuvable');

            return redirect(route('ruchers.index'));
        }

        $users = User::all('id','name');

        return view('ruchers.edit')
        ->with('rucher', $rucher)
        ->with('users', $users);
    }

    /**
    * Update the specified Rucher in storage.
    *
    * @param  int              $id
    * @param UpdateRucherRequest $request
    *
    * @return Response
    */
    public function update($id, UpdateRucherRequest $request)
    {
        $request->validate([
            "nom" => "required|min:5|max:50",
            "idApiculteur" => "required"
        ]);

        $rucher = $this->rucherRepository->findWithoutFail($id);

        if (empty($rucher)) {
            Flash::error('Rucher introuvable');

            return redirect(route('ruchers.index'));
        }

        $rucher = $this->rucherRepository->update($request->all(), $id);

        Flash::success('Rucher mis à jour avec succès');

        return redirect(route('ruchers.index'));
    }

    /**
    * Remove the specified Rucher from storage.
    *
    * @param  int $id
    *
    * @return Response
    */
    public function destroy($id)
    {
        $rucher = $this->rucherRepository->findWithoutFail($id);

        if (empty($rucher)) {
            Flash::error('Rucher introuvable');

            return redirect(route('ruchers.index'));
        }

        $this->rucherRepository->delete($id);

        Flash::success('Rucher supprimé avec succès');

        return redirect(route('ruchers.index'));
    }
}
