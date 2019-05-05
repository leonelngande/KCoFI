<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Subdivision
 * @package App\Models
 * @version May 4, 2019, 5:45 pm UTC
 *
 * @property Division division
 * @property Collection convicts
 * @property string name
 * @property integer division_id
 */
class Subdivision extends Model
{

    public $table = 'subdivisions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'division_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'division_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'division_id' => 'required'
    ];

    public $timestamps = false;

    public function getSubdivisionDivisionAttribute()
    {
        return "{$this->name} ({$this->division->name})";
    }

    /**
     * @return BelongsTo
     **/
    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    /**
     * @return HasMany
     **/
    public function convicts()
    {
        return $this->hasMany(Convict::class);
    }
}
