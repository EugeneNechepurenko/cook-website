<?php

namespace App\Http\Resources;

use App\Models\Cuisine;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

/**
 * Class CuisineResource
 *
 * @package App\Http\Resources
 * @mixin Collection
 */
class CuisineResource extends JsonResource
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
        /** @var $this Cuisine */
        return [
            'id'                => $this->id,
            'title'          	=> $this->title,
        ];
    }
}
