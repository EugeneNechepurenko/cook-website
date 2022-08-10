<?php

namespace App\Http\Resources;

use App\Models\Tag;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

/**
 * Class TagResource
 *
 * @package App\Http\Resources
 * @mixin Collection
 */
class TagResource extends JsonResource
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
        /** @var $this Tag */
        return [
            'id'                => $this->id,
            'title'          	=> $this->title,
        ];
    }
}
