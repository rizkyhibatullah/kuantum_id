<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Store extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'seller_id',
        'logo',
        'banner',
        'name',
        'phone',
        'email',
        'short_description',
        'long_description',
    ];

    public function seller(): BelongsTo
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function wallet(): HasOne
    {
        return $this->hasOne(StoreWallet::class);
    }

    public function withdrawalRequests(): HasMany
    {
        return $this->hasMany(StoreWithdrawalRequest::class);
    }

    public function withdrawMethods(): HasMany
    {
        return $this->hasMany(StoreWithdrawMethod::class);
    }
    
    // **INI ADALAH RELASI YANG DIKOREKSI (lihat catatan di atas)**
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}