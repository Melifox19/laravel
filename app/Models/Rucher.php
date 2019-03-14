<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Rucher
 * @package App\Models
 * @version February 11, 2019, 10:48 am UTC
 *
 * @property string nom
 * @property integer idApiculteur
 */
class Rucher extends Model
{
    use SoftDeletes;

    public $table = 'ruchers';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nom',
        'idApiculteur'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom' => 'string',
        'idApiculteur' => 'integer'
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
      return $this->hasMany(\App\Models\Ruche::class, 'idRucher');
    }

    public function users()
    {
      return $this->belongsTo(\App\Models\User::class, 'idApiculteur');
    }
}
