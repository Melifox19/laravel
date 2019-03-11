<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ruche
 * @package App\Models
 * @version February 11, 2019, 2:24 pm UTC
 *
 * @property integer addrMelinet
 * @property string idSigfox
 * @property enum('meliruche' type
 * @property integer idRucher
 * @property integer idMeliborne
 */
class Ruche extends Model
{
    use SoftDeletes;

    public $table = 'ruches';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'addrMelinet',
        'idSigfox',
        'type',
        'idRucher',
        'idMeliborne'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'addrMelinet' => 'integer',
        'idSigfox' => 'string',
        'idRucher' => 'integer',
        'idMeliborne' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'addrMelinet' => 'between:1,8',
        'idSigfox' => 'email'
    ];

    
}
