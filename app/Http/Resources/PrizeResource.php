<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PrizeResource extends JsonResource
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
            'prize_id' => $this->prize_id,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id,
            'title' => $this->title,
            'description' => $this->description,
            'amount' => $this->amount,
            'cost' => $this->cost,
            'active' => $this->active,
            'free' => $this->free,
            'confirmed' => $this->confirmed,
            'premium' => $this->premium,
            'raised_amount' => $this->raised_amount,
            'expiry_date' => $this->expiry_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'prize_winners' => new PrizeWinnersCollection($this->whenLoaded('prize_winners')),
            'category' => new CategoryResource($this->whenLoaded('category'))
        ];
    }
}