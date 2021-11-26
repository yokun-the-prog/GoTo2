<?php

namespace App\Repositories;

use App\Models\TransportDivision;
use App\Repositories\BaseRepository;

/**
 * Class TransportDivisionRepository
 * @package App\Repositories
 * @version November 26, 2021, 10:48 am JST
*/

class TransportDivisionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return TransportDivision::class;
    }
}
