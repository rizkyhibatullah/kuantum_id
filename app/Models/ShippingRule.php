<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingRule extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'type',
        'minimum_order',
        'charge',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}