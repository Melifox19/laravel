<?php

namespace App\Repositories;

use App\Models\Mesure;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MesureRepository
 * @package App\Repositories
 * @version February 11, 2019, 2:36 pm UTC
 *
 * @method Mesure findWithoutFail($id, $columns = ['*'])
 * @method Mesure find($id, $columns = ['*'])
 * @method Mesure first($columns = ['*'])
*/
class MesureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
      'horodatageMesure',
      'masse',
      'temperatureInt',
      'temperatureExt',
      'humiditeInt',
      'humiditeExt',
      'pression',
      'niveauBatterie',
      'longitude',
      'latitude',
      'debitSonore200',
      'debitSonore400',
      'idRuche'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Mesure::class;
    }
}
