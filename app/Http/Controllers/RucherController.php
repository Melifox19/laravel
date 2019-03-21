<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRucherRequest;
use App\Http\Requests\UpdateRucherRequest;

use App\Repositories\RucherRepository;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
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
        $ruchers = $this->rucherRepository->paginate(10);

        return view('ruchers.index')
            ->with('ruchers', $ruchers, 'users', $users);
    }

    /**
     * Show the form for creating a new Rucher.
     *
     * @return Response
     */
    public function create()
    {
        return view('ruchers.create');
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
        $input = $request->all();

        $rucher = $this->rucherRepository->create($input);

        Flash::success('Rucher saved successfully.');

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
            Flash::error('Rucher not found');

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
            Flash::error('Rucher not found');

            return redirect(route('ruchers.index'));
        }

        return view('ruchers.edit')->with('rucher', $rucher);
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
        $rucher = $this->rucherRepository->findWithoutFail($id);

        if (empty($rucher)) {
            Flash::error('Rucher not found');

            return redirect(route('ruchers.index'));
        }

        $rucher = $this->rucherRepository->update($request->all(), $id);

        Flash::success('Rucher updated successfully.');

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
            Flash::error('Rucher not found');

            return redirect(route('ruchers.index'));
        }

        $this->rucherRepository->delete($id);

        Flash::success('Rucher deleted successfully.');

        return redirect(route('ruchers.index'));
    }
}
