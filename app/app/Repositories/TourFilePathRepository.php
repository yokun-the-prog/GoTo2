<?php

namespace App\Repositories;

use App\Models\TourFilepath;
use App\Repositories\BaseRepository;

/**
 * Class TourFilepathRepository
 * @package App\Repositories
 * @version November 26, 2021, 10:52 am JST
*/

class TourFilepathRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tour_id'
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
        return TourFilepath::class;
    }
}
