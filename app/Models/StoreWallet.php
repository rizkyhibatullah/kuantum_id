<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StoreWallet extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'store_id',
        'balance',
    ];

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }
}