<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = [];

    protected $casts = [
        'reservation_date' => 'date:d/m/Y'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
