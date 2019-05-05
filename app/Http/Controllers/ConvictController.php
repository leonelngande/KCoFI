<?php

namespace App\Http\Controllers;

use App\DataTables\ConvictDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateConvictRequest;
use App\Http\Requests\UpdateConvictRequest;
use App\Models\Convict;
use App\Models\Subdivision;
use App\Repositories\ConvictRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ConvictController extends AppBaseController
{
    /** @var  ConvictRepository */
    private $convictRepository;

    public function __construct(ConvictRepository $convictRepo)
    {
        $this->convictRepository = $convictRepo;
    }

    /**
     * Display a listing of the Convict.
     *
     * @param ConvictDataTable $convictDataTable
     * @return Response
     */
    public function index(ConvictDataTable $convictDataTable)
    {
        return $convictDataTable->render('convicts.index');
    }

    /**
     * Show the form for creating a new Convict.
     *
     * @return Response
     */
    public function create()
    {
        $subdivisions = ['' => 'Select a subdivision'] + Subdivision::with('division')->get()->pluck('subdivision_division', 'id')->toArray();

        return view('convicts.create')->with(compact('subdivisions'));
    }

    /**
     * Store a newly created Convict in storage.
     *
     * @param CreateConvictRequest $request
     *
     * @return Response
     */
    public function store(CreateConvictRequest $request)
    {
        $input = $request->all();

        $convict = $this->convictRepository->create($input);

        Flash::success('Convict saved successfully.');

        return redirect(route('convicts.index'));
    }

    /**
     * Display the specified Convict.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $convict = Convict::with('subdivision')->find($id);

        if (empty($convict)) {
            Flash::error('Convict not found');

            return redirect(route('convicts.index'));
        }

        return view('convicts.show')->with('convict', $convict);
    }

    /**
     * Show the form for editing the specified Convict.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $convict = $this->convictRepository->find($id);
        $subdivisions = ['' => 'Select a subdivision'] + Subdivision::with('division')->get()->pluck('subdivision_division', 'id')->toArray();

        if (empty($convict)) {
            Flash::error('Convict not found');

            return redirect(route('convicts.index'));
        }

        return view('convicts.edit')->with(compact('convict', 'subdivisions'));
    }

    /**
     * Update the specified Convict in storage.
     *
     * @param  int              $id
     * @param UpdateConvictRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConvictRequest $request)
    {
        $convict = $this->convictRepository->find($id);

        if (empty($convict)) {
            Flash::error('Convict not found');

            return redirect(route('convicts.index'));
        }

        $convict = $this->convictRepository->update($request->all(), $id);

        Flash::success('Convict updated successfully.');

        return redirect(route('convicts.index'));
    }

    /**
     * Remove the specified Convict from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $convict = $this->convictRepository->find($id);

        if (empty($convict)) {
            Flash::error('Convict not found');

            return redirect(route('convicts.index'));
        }

        $this->convictRepository->delete($id);

        Flash::success('Convict deleted successfully.');

        return redirect(route('convicts.index'));
    }
}
