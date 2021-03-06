<?php

namespace App\Repositories;

use App\Models\PhotorallyDivision;
use App\Repositories\BaseRepository;

/**
 * Class PhotorallyDivisionRepository
 * @package App\Repositories
 * @version November 26, 2021, 10:47 am JST
*/

class PhotorallyDivisionRepository extends BaseRepository
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
        return PhotorallyDivision::class;
    }
}
