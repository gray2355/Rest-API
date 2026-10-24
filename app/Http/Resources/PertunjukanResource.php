<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PertunjukanResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'location' => $this->location,
            'date' => $this->date,
            'time' => $this->time,
            'price_domestic' => $this->price_domestic,
            'price_foreign' => $this->price_foreign,
            'quota' => $this->quota,
            'description' => $this->description,
            'image' => $this->image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
