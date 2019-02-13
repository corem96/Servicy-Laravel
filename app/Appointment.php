<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'client_name',
        'client_contact',
        'price_expected',
        'price_full',
        'price_final',
        'discount',
        'canceled',
        'cancelation_reason',
        'start_at',
        'ends_at_expected',
        'ends_at'
    ];
}
