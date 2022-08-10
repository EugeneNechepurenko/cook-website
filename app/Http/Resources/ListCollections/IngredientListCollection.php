<?php

namespace App\Http\Resources\ListCollections;

use App\Http\Resources\BaseListCollection;
use Illuminate\Support\Collection;

/**
 * Class IngredientListCollection
 *
 * @package App\Http\Resources\ListCollections
 */
class IngredientListCollection extends BaseListCollection
{
    /**
     * Specifies data item in response
     *
     * @return Collection
     */
    protected function data(): Collection
    {
        return $this->collection->transform(function ($Ingredient) {
            return [
                'id'        => $Ingredient->id,
                'title'     => $Ingredient->title,
                'amount'     => $Ingredient->amount,
                'type'     => $Ingredient->type,
            ];
        });
    }
}