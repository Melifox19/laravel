<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
* Class User
* @package App\Models
* @version February 12, 2019, 2:40 pm UTC
*
* @property \Illuminate\Database\Eloquent\Collection Rucher
* @property \Illuminate\Database\Eloquent\Collection ruches
* @property string name
* @property string email
* @property string|\Carbon\Carbon email_verified_at
* @property string password
* @property string remember_token
*/
class User extends Model
{
  use SoftDeletes;

  public $table = 'users';

  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';
  protected $dates = ['deleted_at'];


  public $fillable = [
    'name',
    'email',
    'role',
    'email_verified_at',
    'password',
    'remember_token'
  ];

  /**
  * The attributes that should be casted to native types.
  *
  * @var array
  */
  protected $casts = [
    'id' => 'integer',
    'name' => 'string',
    'email' => 'string',
    'role' => 'string',
    'password' => 'string',
    'remember_token' => 'string',
    'deleted_at' => 'string'
  ];

  /**
  * Validation rules
  *
  * @var array
  */
  public static $rules = [

  ];

  /**
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  **/
  public function ruchers()
  {
    return $this->hasMany(\App\Models\Rucher::class, 'idApiculteur');
  }
}
