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
        'temperature',
        'humidite',
        'niveauBatterie',
        'longitude',
        'latitude',
        'debitSonore',
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
