<?php

namespace App\Http\Resources\ListCollections;

use App\Http\Resources\BaseListCollection;
use Illuminate\Support\Collection;

/**
 * Class CuisineListCollection
 *
 * @package App\Http\Resources\ListCollections
 */
class CuisineListCollection extends BaseListCollection
{
    /**
     * Specifies data item in response
     *
     * @return Collection
     */
    protected function data(): Collection
    {
        return $this->collection->transform(function ($Cuisine) {
            return [
                'id'        => $Cuisine->id,
                'title'     => $Cuisine->title,
            ];
        });
    }
}