<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Alerte
 * @package App\Models
 * @version February 11, 2019, 2:39 pm UTC
 *
 * @property dateTime horodatageAlerte
 * @property enum("capteur" type
 * @property string description
 * @property integer idRuche
 */
class Alerte extends Model
{
    use SoftDeletes;

    public $table = 'alertes';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'horodatageAlerte',
        'type',
        'description',
        'idRuche'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'horodatageAlerte' => 'datetime',
        'description' => 'string',
        'idRuche' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function ruches()
    {
      return $this->belongsTo(\App\Models\Ruche::class, 'idRuche');
    }
}
