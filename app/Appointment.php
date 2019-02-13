<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'client_id',
        'user_id_created',
        'user_id',
        'client_name',
        'client_contact',
        'price_expected',
        'price_full',
        'discount',
        'price_final',
        'canceled',
        'cancelation_reason',
        'start_at',
        'ends_at_expected',
        'ends_at',
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_requested')
            ->withPivot('appointment_id', 'price', 'is_provided')
            ->withTimestamps();
    }

    public function clients()
    {
        return $this->belongsTo(App\Client::class);
    }
}
