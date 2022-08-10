<?php

namespace App\Http\Resources;

use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

/**
 * Class CategoryResource
 *
 * @package App\Http\Resources
 * @mixin Collection
 */
class CategoryResource extends JsonResource
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
        /** @var $this Category */
        return [
            'id'                => $this->id,
            'title'          	=> $this->title,
        ];
    }
}
