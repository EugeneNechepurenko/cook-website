<?php

namespace App\Http\Resources;

use App\Models\Recipe;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

/**
 * Class RecipeResource
 *
 * @package App\Http\Resources
 * @mixin Collection
 */
class RecipeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        /** @var $this Recipe */
        return [
            'id'                => $this->id,
            'title'          	=> $this->title,
            'category'          	=> $this->category,
            'total_time'          	=> $this->total_time,
            'active_time'          	=> $this->active_time,
            'difficulty'          	=> $this->difficulty,
            'yields'          	=> $this->yields,
            'kcal'          	=> $this->kcal,
            'price'          	=> $this->price,
            'cuisine'          	=> $this->cuisine,
            'description'          	=> $this->description,
            'ingredients'          	=> $this->ingredients,
            'steps'          	=> $this->steps,
            'img'          	=> $this->img,
            'media'          	=> $this->media,
            'tags'          	=> $this->tags,
        ];
    }
}
