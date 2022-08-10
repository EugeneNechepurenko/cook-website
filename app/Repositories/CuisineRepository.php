<?php

namespace App\Repositories;

use App\Models\Cuisine;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\QueryException;

/**
 * Class CuisineRepository
 *
 * @package App\Repositories
 *
 */
class CuisineRepository extends BaseRepository
{
    /**
     * CuisineRepository constructor.
     *
     * @param Cuisine $Cuisine
     * @internal param Cuisine $Cuisine
     */
    public function __construct(Cuisine $Cuisine)
    {
        $this->model = $Cuisine;
    }

    /**
     * @inheritdoc
     */
    public function list(array $params = [], array $relationships = []): LengthAwarePaginator
    {
        $query = $this->newQuery();
        $query->select([
            'cuisine.id',
            'cuisine.title',
        ]);
        return $this->processList($query, $params, $relationships);
    }
}
