<?php

namespace App\Http\Resources;

use App\Models\Difficulty;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

/**
 * Class DifficultyResource
 *
 * @package App\Http\Resources
 * @mixin Collection
 */
class DifficultyResource extends JsonResource
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
        /** @var $this Difficulty */
        return [
            'id'                => $this->id,
            'title'          	=> $this->title,
        ];
    }
}
