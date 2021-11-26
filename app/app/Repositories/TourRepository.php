<?php

namespace App\Repositories;

use App\Models\Tour;
use App\Repositories\BaseRepository;

/**
 * Class TourRepository
 * @package App\Repositories
 * @version November 26, 2021, 10:51 am JST
*/

class TourRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'photorally_division_id',
        'transport_division_id',
        'schedule',
        'departure_spot',
        'departure_at',
        'return_spot',
        'return_at'
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
        return Tour::class;
    }
}
