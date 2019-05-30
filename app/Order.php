<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    protected $casts = [
        'date_ordered' => 'datetime:d/m H:i'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userContact()
    {
        return $this->belongsTo(UserContact::class);
    }

    public function baskets()
    {
        return $this->hasMany(Basket::class);
    }
}
