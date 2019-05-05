<?php

namespace App\Repositories;

use App\Models\ConvictionRecord;
use App\Repositories\BaseRepository;

/**
 * Class ConvictionRecordRepository
 * @package App\Repositories
 * @version May 4, 2019, 5:47 pm UTC
*/

class ConvictionRecordRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'convict_id',
        'date_of_conviction',
        'court',
        'nature_of_offence',
        'offence_commited_on',
        'warrant_issued_on',
        'warrant_type'
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
        return ConvictionRecord::class;
    }
}
