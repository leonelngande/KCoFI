<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Certificate
 * @package App\Models
 * @version May 4, 2019, 5:46 pm UTC
 *
 * @property \App\Models\User user
 * @property string name
 * @property string id_card_number
 * @property integer user_id
 */
class Certificate extends Model
{

    public $table = 'certificates';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'id_card_number',
        'user_id'
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
        'id_card_number' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'user_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
