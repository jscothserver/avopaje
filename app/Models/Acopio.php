<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Acopio extends Model
{
    protected $fillable = ['customer_id', 'name', 'phone'];
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    public function lots(): HasMany
    {
        return $this->hasMany(Lot::class);
    }
}

