<?php

namespace App\Repositories;

use App\Models\Alerte;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AlerteRepository
 * @package App\Repositories
 * @version February 12, 2019, 8:53 am UTC
 *
 * @method Alerte findWithoutFail($id, $columns = ['*'])
 * @method Alerte find($id, $columns = ['*'])
 * @method Alerte first($columns = ['*'])
*/
class AlerteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'horodatageAlerte',
        'type',
        'description',
        'idRuche'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Alerte::class;
    }
}
