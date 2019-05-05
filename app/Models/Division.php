<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Division
 * @package App\Models
 * @version May 4, 2019, 5:45 pm UTC
 *
 * @property Collection subdivisions
 * @property string name
 */
class Division extends Model
{

    public $table = 'divisions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name'
    ];

    public $timestamps = false;

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return HasMany
     **/
    public function subdivisions()
    {
        return $this->hasMany(Subdivision::class);
    }
}
