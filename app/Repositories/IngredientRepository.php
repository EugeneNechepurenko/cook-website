<?php

namespace App\Repositories;

use App\Models\Ingredient;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\QueryException;

/**
 * Class IngredientRepository
 *
 * @package App\Repositories
 *
 */
class IngredientRepository extends BaseRepository
{
    /**
     * IngredientRepository constructor.
     *
     * @param Ingredient $Ingredient
     * @internal param Ingredient $Ingredient
     */
    public function __construct(Ingredient $Ingredient)
    {
        $this->model = $Ingredient;
    }

    /**
     * @inheritdoc
     */
    public function list(array $params = [], array $relationships = []): LengthAwarePaginator
    {
        $query = $this->newQuery();
        $query->select([
            'ingredient.id',
            'ingredient.title',
            'ingredient.amount',
            'ingredient.type',
        ]);
        return $this->processList($query, $params, $relationships);
    }
}
