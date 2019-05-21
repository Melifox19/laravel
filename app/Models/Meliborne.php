<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
* Class Meliborne
* @package App\Models
* @version February 11, 2019, 2:15 pm UTC
*
* @property integer niveauBatterie
* @property string idSigfox
* @property integer idRucher
*/
class Meliborne extends Model
{
    use SoftDeletes;

    public $table = 'melibornes';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];


    public $fillable = [
        'niveauBatterie',
        'idSigfox',
        'longitude',
        'latitude',
        'idRucher'
    ];

    /**
    * The attributes that should be casted to native types.
    *
    * @var array
    */
    protected $casts = [
        'niveauBatterie' => 'integer',
        'idSigfox' => 'string',
        'longitude' => 'float',
        'latitude' => 'float',
        'idRucher' => 'integer',
        'deleted_at' => 'string'
    ];

    /**
    * Validation rules
    *
    * @var array
    */
    public static $rules = [
      'niveauBatterie' => 'nullable|integer',
      'idSigfox' => 'required|regex:/[0-9A-F]{6}/u',
      'longitude' => 'nullable|float',
      'latitude' => 'nullable|float',
      'idRucher' => 'required|integer|exists:ruchers,id'

    ];

    public function ruches()
    {
        return $this->hasMany(\App\Models\Ruche::class, 'idMeliborne');
    }

    public function ruchers()
    {
        return $this->belongsTo(\App\Models\Rucher::class, 'idRucher');
    }
}
