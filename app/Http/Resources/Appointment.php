<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Appointment extends JsonResource
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
            'user_id_created' => $this->user_id_created,
            'client_id' => $this->client_id,
            'client_name' => $this->client_name,
            'client_contact' => $this->client_contact,
            'price_expected' => $this->price_expected,
            'price_full' => $this->price_full,
            'price_final' => $this->price_final,
            'discount' => $this->discount,
            'canceled' => $this->canceled,
            'cancelation_reason' => $this->cancelation_reason,
            'start_at' => $this->start_at,
            'ends_at_expected' => $this->ends_at_expected,
            'ends_at' => $this->ends_at,
            'services' => Service::collection($this->services),
        ];
    }
}
