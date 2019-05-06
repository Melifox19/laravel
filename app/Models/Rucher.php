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

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
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
        'idApiculteur' => 'integer',
        'deleted_at' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
      'nom' => 'required|string|max:191',
      'idApiculteur' => 'required|integer|exists:users,id'
    ];

    public function ruches()
    {
      return $this->hasMany(\App\Models\Ruche::class, 'idRucher');
    }

    public function melibornes()
    {
      return $this->hasMany(\App\Models\Meliborne::class, 'idRucher');
    }

    public function users()
    {
      return $this->belongsTo(\App\Models\User::class, 'idApiculteur');
    }
}
