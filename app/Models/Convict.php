<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Convict
 * @package App\Models
 * @version May 4, 2019, 5:46 pm UTC
 *
 * @property Subdivision subdivision
 * @property Collection convictionRecords
 * @property string name
 * @property string surname
 * @property string civil_status
 * @property string profession
 * @property string name_father
 * @property string place_of_birth
 * @property string id_card_number
 * @property string residence
 * @property string name_mother
 * @property string nationality
 * @property string gender
 * @property string date_of_birth
 * @property integer subdivision_id
 * @property  string full_name
 * @property  string full_name_id_card
 */
class Convict extends Model
{

    public $table = 'convicts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
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

    public $timestamps = false;

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'surname' => 'string',
        'civil_status' => 'string',
        'profession' => 'string',
        'name_father' => 'string',
        'place_of_birth' => 'string',
        'id_card_number' => 'string',
        'residence' => 'string',
        'name_mother' => 'string',
        'nationality' => 'string',
        'gender' => 'string',
        // 'date_of_birth' => 'date',
        'subdivision_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'surname' => 'required',
        'place_of_birth' => 'required',
        'id_card_number' => 'required',
        'nationality' => 'required',
        'gender' => 'required',
        'date_of_birth' => 'required',
        'subdivision_id' => 'required'
    ];

    protected $appends = [
        'full_name',
        'full_name_id_card',
    ];

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->name} {$this->surname}";
    }
    public function getFullNameIdCardAttribute()
    {
        return "{$this->full_name} ({$this->id_card_number})";
    }

    /**
     * @return BelongsTo
     **/
    public function subdivision()
    {
        return $this->belongsTo(Subdivision::class, 'subdivision_id');
    }

    /**
     * @return HasMany
     **/
    public function convictionRecords()
    {
        return $this->hasMany(ConvictionRecord::class);
    }
}
