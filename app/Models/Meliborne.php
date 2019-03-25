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


    protected $dates = ['deleted_at'];


    public $fillable = [
        'niveauBatterie',
        'idSigfox',
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
        'idRucher' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idSigfox' => 'email'
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
