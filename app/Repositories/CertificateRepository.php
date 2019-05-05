<?php

namespace App\Repositories;

use App\Models\Certificate;
use App\Repositories\BaseRepository;

/**
 * Class CertificateRepository
 * @package App\Repositories
 * @version May 4, 2019, 5:46 pm UTC
*/

class CertificateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'id_card_number',
        'user_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Certificate::class;
    }
}
