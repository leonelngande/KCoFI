<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ConvictionRecord
 * @package App\Models
 * @version May 4, 2019, 5:47 pm UTC
 *
 * @property Convict convict
 * @property integer convict_id
 * @property string date_of_conviction
 * @property string court
 * @property string nature_of_offence
 * @property string offence_commited_on
 * @property string warrant_issued_on
 * @property string warrant_type
 */
class ConvictionRecord extends Model
{

    public $table = 'conviction_records';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'convict_id',
        'date_of_conviction',
        'court',
        'nature_of_offence',
        'offence_commited_on',
        'warrant_issued_on',
        'warrant_type'
    ];

    public $timestamps = false;

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'convict_id' => 'integer',
        // 'date_of_conviction' => 'date',
        'court' => 'string',
        'nature_of_offence' => 'string',
        // 'offence_commited_on' => 'date',
        // 'warrant_issued_on' => 'date',
        'warrant_type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'convict_id' => 'required',
        'date_of_conviction' => 'required',
        'court' => 'required'
    ];

    /**
     * @return BelongsTo
     **/
    public function convict()
    {
        return $this->belongsTo(Convict::class, 'convict_id');
    }
}
