<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMesureRequest;
use App\Http\Requests\UpdateMesureRequest;
use App\Repositories\MesureRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MesureController extends AppBaseController
{
    /** @var  MesureRepository */
    private $mesureRepository;

    public function __construct(MesureRepository $mesureRepo)
    {
        $this->mesureRepository = $mesureRepo;
    }

    /**
     * Display a listing of the Mesure.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mesureRepository->pushCriteria(new RequestCriteria($request));
        $mesures = $this->mesureRepository;

        return view('mesures.index')
            ->with('mesures', $mesures);
    }

    /**
     * Show the form for creating a new Mesure.
     *
     * @return Response
     */
    public function create()
    {
        return view('mesures.create');
    }

    /**
     * Store a newly created Mesure in storage.
     *
     * @param CreateMesureRequest $request
     *
     * @return Response
     */
    public function store(CreateMesureRequest $request)
    {
        $input = $request->all();

        $mesure = $this->mesureRepository->create($input);

        Flash::success('Mesure saved successfully.');

        return redirect(route('mesures.index'));
    }

    /**
     * Display the specified Mesure.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mesure = $this->mesureRepository->findWithoutFail($id);

        if (empty($mesure)) {
            Flash::error('Mesure not found');

            return redirect(route('mesures.index'));
        }

        return view('mesures.show')->with('mesure', $mesure);
    }

    /**
     * Show the form for editing the specified Mesure.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mesure = $this->mesureRepository->findWithoutFail($id);

        if (empty($mesure)) {
            Flash::error('Mesure not found');

            return redirect(route('mesures.index'));
        }

        return view('mesures.edit')->with('mesure', $mesure);
    }

    /**
     * Update the specified Mesure in storage.
     *
     * @param  int              $id
     * @param UpdateMesureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMesureRequest $request)
    {
        $mesure = $this->mesureRepository->findWithoutFail($id);

        if (empty($mesure)) {
            Flash::error('Mesure not found');

            return redirect(route('mesures.index'));
        }

        $mesure = $this->mesureRepository->update($request->all(), $id);

        Flash::success('Mesure updated successfully.');

        return redirect(route('mesures.index'));
    }

    /**
     * Remove the specified Mesure from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mesure = $this->mesureRepository->findWithoutFail($id);

        if (empty($mesure)) {
            Flash::error('Mesure not found');

            return redirect(route('mesures.index'));
        }

        $this->mesureRepository->delete($id);

        Flash::success('Mesure deleted successfully.');

        return redirect(route('mesures.index'));
    }
}
