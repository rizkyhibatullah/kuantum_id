<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawMethod extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description', // Di skema Anda ini bigint, mungkin seharusnya string/text?
        'minimum_amount',
        'maximum_amount',
        'is_active', // Di skema Anda ini bigint, mungkin seharusnya boolean?
    ];
}