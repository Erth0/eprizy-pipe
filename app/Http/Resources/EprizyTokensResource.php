<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EprizyTokensResource extends JsonResource
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
            'slug' => $this->slug,
            'name' => $this->name,
            'description' => $this->description,
            'amount' => $this->amount,
            'tokens' => $this->tokens,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}