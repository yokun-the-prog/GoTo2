<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SpotTag
 * @package App\Models
 * @version November 26, 2021, 11:02 am JST
 *
 * @property foreignId $spot_id
 * @property foreignId $tag_id
 */
class SpotTag extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'spot_tags';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'spot_id',
        'tag_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'spot_id' => 'required|numeric',
        'tag_id' => 'required|numeric'
    ];

    
}
