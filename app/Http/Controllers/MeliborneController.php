<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMeliborneRequest;
use App\Http\Requests\UpdateMeliborneRequest;
use App\Repositories\MeliborneRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Rucher;
use App\Models\User;

use Flash;
use Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MeliborneController extends AppBaseController
{
    /** @var  MeliborneRepository */
    private $meliborneRepository;

    public function __construct(MeliborneRepository $meliborneRepo)
    {
        $this->meliborneRepository = $meliborneRepo;
    }

    /**
     * Display a listing of the Meliborne.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->meliborneRepository->pushCriteria(new RequestCriteria($request));

        if ( Auth::user()->role == 'admin' )
        {
            $melibornes = $this->meliborneRepository->all();
        }
        else
        {
            $melibornes = DB::table('melibornes')
            ->join('ruchers', 'melibornes.idRucher', '=', 'ruchers.id')
            ->join('users', 'ruchers.idApiculteur', '=', 'users.id')
            ->where('users.id', '=', Auth::user()->id)
            ->get();
        }

        $ruchers = DB::table('ruchers')->get();

        return view('melibornes.index')
            ->with('melibornes', $melibornes)
            ->with('ruchers', $ruchers);
    }

    /**
     * Show the form for creating a new Meliborne.
     *
     * @return Response
     */
    public function create()
    {
        $ruchers = DB::table('ruchers')
        ->where('idApiculteur', '=', Auth::user()->id)
        ->get();

        return view('melibornes.create')->with('ruchers', $ruchers);;
    }

    /**
     * Store a newly created Meliborne in storage.
     *
     * @param CreateMeliborneRequest $request
     *
     * @return Response
     */
    public function store(CreateMeliborneRequest $request)
    {
        $input = $request->all();

        $meliborne = $this->meliborneRepository->create($input);

        Flash::success('Meliborne saved successfully.');

        return redirect(route('melibornes.index'));
    }

    /**
     * Display the specified Meliborne.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $meliborne = $this->meliborneRepository->findWithoutFail($id);

        if (empty($meliborne)) {
            Flash::error('Meliborne not found');

            return redirect(route('melibornes.index'));
        }

        return view('melibornes.show')->with('meliborne', $meliborne);
    }

    /**
     * Show the form for editing the specified Meliborne.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $meliborne = $this->meliborneRepository->findWithoutFail($id);

        if (empty($meliborne)) {
            Flash::error('Meliborne not found');

            return redirect(route('melibornes.index'));
        }

        $ruchers = DB::table('ruchers')
        ->where('idApiculteur', '=', Auth::user()->id)
        ->get();

        return view('melibornes.edit')
        ->with('meliborne', $meliborne)
        ->with('ruchers', $ruchers);
    }

    /**
     * Update the specified Meliborne in storage.
     *
     * @param  int              $id
     * @param UpdateMeliborneRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMeliborneRequest $request)
    {
        $meliborne = $this->meliborneRepository->findWithoutFail($id);

        if (empty($meliborne)) {
            Flash::error('Meliborne not found');

            return redirect(route('melibornes.index'));
        }

        $meliborne = $this->meliborneRepository->update($request->all(), $id);

        Flash::success('Meliborne updated successfully.');

        return redirect(route('melibornes.index'));
    }

    /**
     * Remove the specified Meliborne from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $meliborne = $this->meliborneRepository->findWithoutFail($id);

        if (empty($meliborne)) {
            Flash::error('Meliborne not found');

            return redirect(route('melibornes.index'));
        }

        $this->meliborneRepository->delete($id);

        Flash::success('Meliborne deleted successfully.');

        return redirect(route('melibornes.index'));
    }
}
