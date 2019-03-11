<?php

namespace App\Repositories;

use App\Models\Ruche;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RucheRepository
 * @package App\Repositories
 * @version February 12, 2019, 8:42 am UTC
 *
 * @method Ruche findWithoutFail($id, $columns = ['*'])
 * @method Ruche find($id, $columns = ['*'])
 * @method Ruche first($columns = ['*'])
*/
class RucheRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'addrMelinet',
        'idSigfox',
        'type',
        'idRucher',
        'idMeliborne'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ruche::class;
    }
}
