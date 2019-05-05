<?php

namespace App\Repositories;

use App\Models\Convict;
use App\Repositories\BaseRepository;

/**
 * Class ConvictRepository
 * @package App\Repositories
 * @version May 4, 2019, 5:46 pm UTC
*/

class ConvictRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'surname',
        'civil_status',
        'profession',
        'name_father',
        'place_of_birth',
        'id_card_number',
        'residence',
        'name_mother',
        'nationality',
        'gender',
        'date_of_birth',
        'subdivision_id'
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
        return Convict::class;
    }
}
