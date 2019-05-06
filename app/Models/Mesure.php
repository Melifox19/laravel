<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Mesure
 * @package App\Models
 * @version February 11, 2019, 2:36 pm UTC
 *
 * @property dateTime horodatageMesure
 * @property float temperature
 * @property integer humidite
 * @property integer niveauBatterie
 * @property float longitude
 * @property float latitude
 * @property integer debitSonore
 * @property integer idRuche
 */
class Mesure extends Model
{
    use SoftDeletes;

    public $table = 'mesures';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];


    public $fillable = [
        'horodatageMesure',
        'masse',
        'temperatureInt',
        'temperatureExt',
        'humiditeInt',
        'humiditeExt',
        'pression',
        'niveauBatterie',
        'debitSonore200',
        'debitSonore400',
        'idRuche'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'horodatageMesure' => 'datetime',
        'masse' => 'float',
        'temperatureInt' => 'float',
        'temperatureExt' => 'float',
        'humiditeInt' => 'integer',
        'humiditeExt' => 'integer',
        'pression' => 'integer',
        'niveauBatterie' => 'integer',
        'debitSonore200' => 'integer',
        'debitSonore400' => 'integer',
        'idRuche' => 'integer',
        'deleted_at' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'humidite' => 'poids float number',
        'niveauBatterie' => 'longitude float:nullable text'
    ];

    public function ruches()
    {
      return $this->belongsTo(\App\Models\Ruche::class, 'idRuche');
    }
}
