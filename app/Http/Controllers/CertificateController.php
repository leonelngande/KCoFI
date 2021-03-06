<?php

namespace App\Http\Controllers;

use App\DataTables\CertificateDataTable;
use App\Http\Requests\BeforeCreateCertificateRequest;
use App\Http\Requests\CreateCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;
use App\Models\Convict;
use App\Repositories\CertificateRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class CertificateController extends AppBaseController
{
    /** @var  CertificateRepository */
    private $certificateRepository;

    public function __construct(CertificateRepository $certificateRepo)
    {
        $this->certificateRepository = $certificateRepo;
    }

    /**
     * Display a listing of the Certificate.
     *
     * @param CertificateDataTable $certificateDataTable
     * @return Response
     */
    public function index(CertificateDataTable $certificateDataTable)
    {
        return $certificateDataTable->render('certificates.index');
    }

    /**
     * Show the form for creating a new Certificate.
     *
     * @param BeforeCreateCertificateRequest $request
     * @return array
     */
    public function create(BeforeCreateCertificateRequest $request)
    {
        $idCardNumber = $request->get('id_card_number');
        $convict = Convict::with('convictionRecords')->where('id_card_number', $idCardNumber)->first();

        if (!empty($convict)) {
            // Redirect to convict detail page since a certificate can't be created for a convict
             Flash::error("Permission denied: convict found with Id Card Number $idCardNumber");

            return redirect(route('convicts.show', $convict->id));
        }

        return view('certificates.create');
    }

    /**
     * Store a newly created Certificate in storage.
     *
     * @param CreateCertificateRequest $request
     *
     * @return Response
     */
    public function store(CreateCertificateRequest $request)
    {
        $input = $request->all();

        $certificate = $this->certificateRepository->create($input);

        Flash::success('Certificate saved successfully.');

        return redirect(route('certificates.index'));
    }

    /**
     * Display the specified Certificate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $certificate = $this->certificateRepository->find($id);

        if (empty($certificate)) {
            Flash::error('Certificate not found');

            return redirect(route('certificates.index'));
        }

        return view('certificates.show')->with('certificate', $certificate);
    }

    /**
     * Show the form for editing the specified Certificate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $certificate = $this->certificateRepository->find($id);

        if (empty($certificate)) {
            Flash::error('Certificate not found');

            return redirect(route('certificates.index'));
        }

        return view('certificates.edit')->with('certificate', $certificate);
    }

    /**
     * Update the specified Certificate in storage.
     *
     * @param  int              $id
     * @param UpdateCertificateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCertificateRequest $request)
    {
        $certificate = $this->certificateRepository->find($id);

        if (empty($certificate)) {
            Flash::error('Certificate not found');

            return redirect(route('certificates.index'));
        }

        $certificate = $this->certificateRepository->update($request->all(), $id);

        Flash::success('Certificate updated successfully.');

        return redirect(route('certificates.index'));
    }

    /**
     * Remove the specified Certificate from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $certificate = $this->certificateRepository->find($id);

        if (empty($certificate)) {
            Flash::error('Certificate not found');

            return redirect(route('certificates.index'));
        }

        $this->certificateRepository->delete($id);

        Flash::success('Certificate deleted successfully.');

        return redirect(route('certificates.index'));
    }
}
