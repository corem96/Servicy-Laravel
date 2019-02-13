<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'details', 'price'];

    public function appointments()
    {
        return $this->belongsToMany(App\Appointments::class, 'service_requested')
            ->withPivot('service_id', 'price', 'is_provided')
            ->withTimestamps();
    }
}
