<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Spot
 * @package App\Models
 * @version November 26, 2021, 11:01 am JST
 *
 * @property string $name
 * @property string $address
 * @property string $tel
 */
class Spot extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'spots';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'address',
        'tel'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'address' => 'string',
        'tel' => 'string',
        'spot_location' => 'string',
        'standard_term' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'address' => 'required',
        'tel' => 'required',
        'spot_location' => 'required',
        'standard_term' => 'required'
    ];

    
}
