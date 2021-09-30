<?php

namespace App\Repositories;

use App\Models\Usurio;
use App\Repositories\BaseRepository;

/**
 * Class UsurioRepository
 * @package App\Repositories
 * @version September 30, 2021, 12:54 am UTC
*/

class UsurioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'apellido',
        'nombre',
        'usurio',
        'password'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Usurio::class;
    }
}
