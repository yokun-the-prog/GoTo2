<?php

namespace App\Repositories;

use App\Models\UserDivision;
use App\Repositories\BaseRepository;

/**
 * Class UserDivisionRepository
 * @package App\Repositories
 * @version November 26, 2021, 10:46 am JST
*/

class UserDivisionRepository extends BaseRepository
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
        return UserDivision::class;
    }
}
