<?php

namespace App\Repositories;

use App\Models\Rucher;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RucherRepository
 * @package App\Repositories
 * @version February 11, 2019, 10:48 am UTC
 *
 * @method Rucher findWithoutFail($id, $columns = ['*'])
 * @method Rucher find($id, $columns = ['*'])
 * @method Rucher first($columns = ['*'])
*/
class RucherRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'idApiculteur'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Rucher::class;
    }
}
