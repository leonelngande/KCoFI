<?php

namespace App\Http\Controllers;

use App\DataTables\DivisionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDivisionRequest;
use App\Http\Requests\UpdateDivisionRequest;
use App\Repositories\DivisionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DivisionController extends AppBaseController
{
    /** @var  DivisionRepository */
    private $divisionRepository;

    public function __construct(DivisionRepository $divisionRepo)
    {
        $this->divisionRepository = $divisionRepo;
    }

    /**
     * Display a listing of the Division.
     *
     * @param DivisionDataTable $divisionDataTable
     * @return Response
     */
    public function index(DivisionDataTable $divisionDataTable)
    {
        return $divisionDataTable->render('divisions.index');
    }

    /**
     * Show the form for creating a new Division.
     *
     * @return Response
     */
    public function create()
    {
        return view('divisions.create');
    }

    /**
     * Store a newly created Division in storage.
     *
     * @param CreateDivisionRequest $request
     *
     * @return Response
     */
    public function store(CreateDivisionRequest $request)
    {
        $input = $request->all();

        $division = $this->divisionRepository->create($input);

        Flash::success('Division saved successfully.');

        return redirect(route('divisions.index'));
    }

    /**
     * Display the specified Division.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $division = $this->divisionRepository->find($id);

        if (empty($division)) {
            Flash::error('Division not found');

            return redirect(route('divisions.index'));
        }

        return view('divisions.show')->with('division', $division);
    }

    /**
     * Show the form for editing the specified Division.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $division = $this->divisionRepository->find($id);

        if (empty($division)) {
            Flash::error('Division not found');

            return redirect(route('divisions.index'));
        }

        return view('divisions.edit')->with('division', $division);
    }

    /**
     * Update the specified Division in storage.
     *
     * @param  int              $id
     * @param UpdateDivisionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDivisionRequest $request)
    {
        $division = $this->divisionRepository->find($id);

        if (empty($division)) {
            Flash::error('Division not found');

            return redirect(route('divisions.index'));
        }

        $division = $this->divisionRepository->update($request->all(), $id);

        Flash::success('Division updated successfully.');

        return redirect(route('divisions.index'));
    }

    /**
     * Remove the specified Division from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $division = $this->divisionRepository->find($id);

        if (empty($division)) {
            Flash::error('Division not found');

            return redirect(route('divisions.index'));
        }

        $this->divisionRepository->delete($id);

        Flash::success('Division deleted successfully.');

        return redirect(route('divisions.index'));
    }
}
