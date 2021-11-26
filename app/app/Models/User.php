<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class User
 * @package App\Models
 * @version November 26, 2021, 10:49 am JST
 *
 * @property foreignId $user_division_id
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $rememberToken
 */
class User extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_division_id',
        'name',
        'email',
        'email_verified_at',
        'password',
        'rememberToken'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'rememberToken' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_division_id' => 'required|numeric',
        'name' => 'required',
        'email' => 'required',
        'email_verified_at' => 'nullable',
        'password' => 'required',
        'rememberToken' => 'nullable'
    ];
}
