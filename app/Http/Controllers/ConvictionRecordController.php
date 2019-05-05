<?php

namespace App\Http\Controllers;

use App\DataTables\ConvictionRecordDataTable;
use App\Http\Requests\CreateConvictionRecordRequest;
use App\Http\Requests\UpdateConvictionRecordRequest;
use App\Models\Convict;
use App\Models\ConvictionRecord;
use App\Repositories\ConvictionRecordRepository;
use Laracasts\Flash\Flash;

class ConvictionRecordController extends AppBaseController
{
    /** @var  ConvictionRecordRepository */
    private $convictionRecordRepository;

    public function __construct(ConvictionRecordRepository $convictionRecordRepo)
    {
        $this->convictionRecordRepository = $convictionRecordRepo;
    }

    /**
     * Display a listing of the ConvictionRecord.
     *
     * @param ConvictionRecordDataTable $convictionRecordDataTable
     * @return Response
     */
    public function index(ConvictionRecordDataTable $convictionRecordDataTable)
    {
        return $convictionRecordDataTable->render('conviction_records.index');
    }

    /**
     * Show the form for creating a new ConvictionRecord.
     *
     * @return Response
     */
    public function create()
    {
        $convicts = ['' => 'Select a convict'] + Convict::all()->pluck('full_name_id_card', 'id')->toArray();
        $selected = app('request')->get('convict');

        return view('conviction_records.create')->with(compact(['convicts', 'selected']));
    }

    /**
     * Store a newly created ConvictionRecord in storage.
     *
     * @param CreateConvictionRecordRequest $request
     *
     * @return Response
     */
    public function store(CreateConvictionRecordRequest $request)
    {
        $input = $request->all();

        $convictionRecord = $this->convictionRecordRepository->create($input);

        Flash::success('Conviction Record saved successfully.');

        return redirect(route('convictionRecords.index'));
    }

    /**
     * Display the specified ConvictionRecord.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $convictionRecord = ConvictionRecord::with('convict')->find($id);

        if (empty($convictionRecord)) {
            Flash::error('Conviction Record not found');

            return redirect(route('convictionRecords.index'));
        }

        return view('conviction_records.show')->with(compact('convictionRecord'));
    }

    /**
     * Show the form for editing the specified ConvictionRecord.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $convictionRecord = $this->convictionRecordRepository->find($id);
        $convicts = ['' => 'Select a convict'] + Convict::all()->pluck('full_name_id_card', 'id')->toArray();

        if (empty($convictionRecord)) {
            Flash::error('Conviction Record not found');

            return redirect(route('convictionRecords.index'));
        }

        return view('conviction_records.edit')->with(compact(['convicts', 'convictionRecord']));
    }

    /**
     * Update the specified ConvictionRecord in storage.
     *
     * @param  int              $id
     * @param UpdateConvictionRecordRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConvictionRecordRequest $request)
    {
        $convictionRecord = $this->convictionRecordRepository->find($id);

        if (empty($convictionRecord)) {
            Flash::error('Conviction Record not found');

            return redirect(route('convictionRecords.index'));
        }

        $convictionRecord = $this->convictionRecordRepository->update($request->all(), $id);

        Flash::success('Conviction Record updated successfully.');

        return redirect(route('convictionRecords.index'));
    }

    /**
     * Remove the specified ConvictionRecord from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $convictionRecord = $this->convictionRecordRepository->find($id);

        if (empty($convictionRecord)) {
            Flash::error('Conviction Record not found');

            return redirect(route('convictionRecords.index'));
        }

        $this->convictionRecordRepository->delete($id);

        Flash::success('Conviction Record deleted successfully.');

        return redirect(route('convictionRecords.index'));
    }
}
