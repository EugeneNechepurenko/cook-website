<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\QueryException;

/**
 * Class CategoryRepository
 *
 * @package App\Repositories
 *
 */
class CategoryRepository extends BaseRepository
{
    /**
     * CategoryRepository constructor.
     *
     * @param Category $Category
     * @internal param Category $Category
     */
    public function __construct(Category $Category)
    {
        $this->model = $Category;
    }

    /**
     * @inheritdoc
     */
    public function list(array $params = [], array $relationships = []): LengthAwarePaginator
    {
        $query = $this->newQuery();
        $query->select([
            'category.id',
            'category.title',
        ]);
        return $this->processList($query, $params, $relationships);
    }
}
