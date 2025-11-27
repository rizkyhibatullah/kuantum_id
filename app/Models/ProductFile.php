<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductFile extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'filename',
        'disk',
        'path',
        'extension',
        'size',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}