<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    protected $fillable = ['empresa','name','rfc','phone'];
    public function direcciones():HasOne
    {
        return $this->hasOne(Direccione::class);
    }
    public function acopio():HasOne
    {
        return $this->hasOne(Acopio::class);
    }
    public function referente():HasOne
    {
        return $this->hasOne(Referente::class);
    }
    public function lotes():HasMany
    {
        return $this->hasMany(Lot::class);
    }
}
