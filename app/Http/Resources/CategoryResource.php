<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'catgegoryable_id' => $this->catgegoryable_id,
            'categoryable_type' => $this->categoryable_type,
            'slug' => $this->slug,
            'name' => $this->name,
            'active' => $this->active,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'prizes' => new PrizeCollection($this->whenLoaded('prizes'))
        ];
    }
}