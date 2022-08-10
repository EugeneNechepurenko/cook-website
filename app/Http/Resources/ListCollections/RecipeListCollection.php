<?php

namespace App\Http\Resources\ListCollections;

use App\Http\Resources\BaseListCollection;
use Illuminate\Support\Collection;

/**
 * Class RecipeListCollection
 *
 * @package App\Http\Resources\ListCollections
 */
class RecipeListCollection extends BaseListCollection
{
    /**
     * Specifies data item in response
     *
     * @return Collection
     */
    protected function data(): Collection
    {
        return $this->collection->transform(function ($Recipe) {
            return [
                'id'        => $Recipe->id,
                'title'     => $Recipe->title,
                'category'     => $Recipe->category,
                'total_time'     => $Recipe->total_time,
                'active_time'     => $Recipe->active_time,
                'difficulty'     => $Recipe->difficulty,
                'yields'     => $Recipe->yields,
                'kcal'     => $Recipe->kcal,
                'price'     => $Recipe->price,
                'cuisine'     => $Recipe->cuisine,
                'description'     => $Recipe->description,
                'ingredients'     => $Recipe->ingredients,
                'steps'     => $Recipe->steps,
                'img'     => $Recipe->img,
                'media'     => $Recipe->media,
                'tags'     => $Recipe->tags,
            ];
        });
    }
}