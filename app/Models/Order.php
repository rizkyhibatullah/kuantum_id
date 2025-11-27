<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'store_id',
        'customer_email',
        'customer_phone',
        'customer_first_name',
        'customer_last_name',
        'billing_address',
        'shipping_address',
        'has_coupon',
        'coupon',
        'discount',
        'total',
        'payment_method',
        'currency',
        'currency_icon',
        'currency_rate',
        'order_status',
        'payment_status',
    ];

    protected $casts = [
        'billing_address' => 'json',
        'shipping_address' => 'json',
        'has_coupon' => 'boolean',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function commission(): HasOne
    {
        return $this->hasOne(StoreCommission::class);
    }
}