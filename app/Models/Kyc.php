<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kyc extends Model
{
    use HasFactory;
    protected $table = 'kycs';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'status',
        'rejected_reason',
        'varified_at',
        'full_name',
        'date_of_birth',
        'gender',
        'full_address',
        'document_type',
        'document_scan_copy',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'varified_at' => 'timestamp',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}