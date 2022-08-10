<?php

namespace App\Http\Resources\ListCollections;

use App\Http\Resources\BaseListCollection;
use Illuminate\Support\Collection;

/**
 * Class TagListCollection
 *
 * @package App\Http\Resources\ListCollections
 */
class TagListCollection extends BaseListCollection
{
    /**
     * Specifies data item in response
     *
     * @return Collection
     */
    protected function data(): Collection
    {
        return $this->collection->transform(function ($Tag) {
            return [
                'id'        => $Tag->id,
                'title'     => $Tag->title,
            ];
        });
    }
}