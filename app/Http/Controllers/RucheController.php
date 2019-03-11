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
        $ruches = $this->rucheRepository->all();

        return view('ruches.index')
            ->with('ruches', $ruches);
    }

    /**
     * Show the form for creating a new Ruche.
     *
     * @return Response
     */
    public function create()
    {
        return view('ruches.create');
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

        Flash::success('Ruche saved successfully.');

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

        if (empty($ruche)) {
            Flash::error('Ruche not found');

            return redirect(route('ruches.index'));
        }

        return view('ruches.show')->with('ruche', $ruche);
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
        $ruche = $this->rucheRepository->findWithoutFail($id);

        if (empty($ruche)) {
            Flash::error('Ruche not found');

            return redirect(route('ruches.index'));
        }

        return view('ruches.edit')->with('ruche', $ruche);
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
            Flash::error('Ruche not found');

            return redirect(route('ruches.index'));
        }

        $ruche = $this->rucheRepository->update($request->all(), $id);

        Flash::success('Ruche updated successfully.');

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
            Flash::error('Ruche not found');

            return redirect(route('ruches.index'));
        }

        $this->rucheRepository->delete($id);

        Flash::success('Ruche deleted successfully.');

        return redirect(route('ruches.index'));
    }
}
