<?php

namespace App\Repositories;

use App\Models\CreateTransport;
use App\Repositories\BaseRepository;

/**
 * Class CreateTransportRepository
 * @package App\Repositories
 * @version November 25, 2021, 12:46 pm JST
*/

class CreateTransportRepository extends BaseRepository
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
        return CreateTransport::class;
    }
}
