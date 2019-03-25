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


    protected $dates = ['deleted_at'];


    public $fillable = [
        'horodatageMesure',
        'temperature',
        'humidite',
        'niveauBatterie',
        'longitude',
        'latitude',
        'debitSonore',
        'idRuche'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'horodatageMesure' => 'datetime',
        'temperature' => 'float',
        'humidite' => 'integer',
        'niveauBatterie' => 'integer',
        'longitude' => 'float',
        'latitude' => 'float',
        'debitSonore' => 'integer',
        'idRuche' => 'integer'
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
