<?php

namespace App\Http\Resources;

use App\Models\Ingredient;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

/**
 * Class IngredientResource
 *
 * @package App\Http\Resources
 * @mixin Collection
 */
class IngredientResource extends JsonResource
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
        /** @var $this Ingredient */
        return [
            'id'                => $this->id,
            'title'          	=> $this->title,
            'amount'          	=> $this->amount,
            'type'          	=> $this->type,
        ];
    }
}
