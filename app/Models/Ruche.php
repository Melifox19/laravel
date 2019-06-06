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

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];


    public $fillable = [
        'addrMelinet',
        'idSigfox',
        'type',
        'longitude',
        'latitude',
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
        'type' => 'string',
        'longitude' => 'float',
        'latitude' => 'float',
        'idRucher' => 'integer',
        'idMeliborne' => 'integer',
        'deleted_at' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'addrMelinet' => 'nullable|integer|between:0,7',
        'idSigfox' => 'nullable|string|regex:[0-9A-F]{6}',
        'longitude' => 'nullable|float',
        'latitude' => 'nullable|float',
        'idRucher' => 'integer|exists:ruchers,id',
        'idMeliborne' => 'nullable|integer|exists:melibornes,id'
    ];

    public function melibornes()
    {
      return $this->belongsTo(\App\Models\Meliborne::class, 'idMeliborne');
    }

    public function ruchers()
    {
      return $this->belongsTo(\App\Models\Ruchers::class, 'idRucher');
    }

    public function mesures()
    {
      return $this->hasMany(\App\Models\Mesure::class, 'idRuche');
    }

    public function alertes()
    {
      return $this->hasMany(\App\Models\Alerte::class, 'idRuche');
    }

}
