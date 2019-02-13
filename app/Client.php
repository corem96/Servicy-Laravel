<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'mobile', 'email'];

    public function appointment()
    {
        return $this->hasMany(App\Appointment::class);
    }
}
