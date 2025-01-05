<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Huerto extends Model
{
    protected $fillable = [
        'huerto',
        'hue',
        'productor',
        'localidad',
        'municipio',
        'estado',
    ];
    public function lot():HasOne
    {
        return $this->hasOne(Lot::class);
    }
    public function lots():HasMany
    {
        return $this->hasMany(Lot::class);
    }
}
