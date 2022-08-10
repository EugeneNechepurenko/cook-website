<?php

namespace App\Http\Resources\ListCollections;

use App\Http\Resources\BaseListCollection;
use Illuminate\Support\Collection;

/**
 * Class DifficultyListCollection
 *
 * @package App\Http\Resources\ListCollections
 */
class DifficultyListCollection extends BaseListCollection
{
    /**
     * Specifies data item in response
     *
     * @return Collection
     */
    protected function data(): Collection
    {
        return $this->collection->transform(function ($Difficulty) {
            return [
                'id'        => $Difficulty->id,
                'title'     => $Difficulty->title,
            ];
        });
    }
}