<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Agenda extends JsonResource
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
            'user_id' => $this->user_id,
            'start_at' => $this->start_at,
            'ends_at' => $this->ends_at
        ];
    }
}
