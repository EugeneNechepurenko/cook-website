<?php

namespace App\Http\Resources\ListCollections;

use App\Http\Resources\BaseListCollection;
use Illuminate\Support\Collection;

/**
 * Class CategoryListCollection
 *
 * @package App\Http\Resources\ListCollections
 */
class CategoryListCollection extends BaseListCollection
{
    /**
     * Specifies data item in response
     *
     * @return Collection
     */
    protected function data(): Collection
    {
        return $this->collection->transform(function ($Category) {
            return [
                'id'        => $Category->id,
                'title'     => $Category->title,
                'img'     => $Category->img,
            ];
        });
    }
}