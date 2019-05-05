<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * @package App\Models
 * @version May 4, 2019, 5:38 pm UTC
 *
 * @property Collection certificates
 * @property string name
 * @property string email
 * @property string phone
 * @property string address
 * @property string username
 * @property string password
 * @property string remember_token
 */
class User extends Authenticatable
{
    use Notifiable;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'username',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'username' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['sometimes', 'required', 'string', 'min:8']
    ];

    /**
     * @return HasMany
     **/
    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }
}
