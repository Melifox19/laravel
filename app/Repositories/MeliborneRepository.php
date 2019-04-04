<?php

namespace App\Repositories;

use App\Models\Meliborne;
use InfyOm\Generator\Common\BaseRepository;

/**
* Class MeliborneRepository
* @package App\Repositories
* @version February 12, 2019, 2:40 pm UTC
*
* @method Meliborne findWithoutFail($id, $columns = ['*'])
* @method Meliborne find($id, $columns = ['*'])
* @method Meliborne first($columns = ['*'])
*/
class MeliborneRepository extends BaseRepository
{
    /**
    * @var array
    */
    protected $fieldSearchable = [
        'niveauBatterie',
        'idSigfox',
        'idRucher'
    ];

    /**
    * Configure the Model
    **/
    public function model()
    {
        return Meliborne::class;
    }
}
