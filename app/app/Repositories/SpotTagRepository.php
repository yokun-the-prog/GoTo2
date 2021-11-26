<?php

namespace App\Repositories;

use App\Models\SpotTag;
use App\Repositories\BaseRepository;

/**
 * Class SpotTagRepository
 * @package App\Repositories
 * @version November 26, 2021, 11:02 am JST
*/

class SpotTagRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'spot_id',
        'tag_id'
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
        return SpotTag::class;
    }
}
