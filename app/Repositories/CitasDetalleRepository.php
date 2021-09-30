<?php

namespace App\Repositories;

use App\Models\CitasDetalle;
use App\Repositories\BaseRepository;

/**
 * Class CitasDetalleRepository
 * @package App\Repositories
 * @version September 30, 2021, 1:11 am UTC
*/

class CitasDetalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcita'
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
        return CitasDetalle::class;
    }
}
