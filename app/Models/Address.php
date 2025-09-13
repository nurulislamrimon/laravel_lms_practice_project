<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'street_address',
        'city',
        'state',
        'postal_code',
        'country',
        'phone',
        'zip_code',
        'is_default'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getFullnameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
