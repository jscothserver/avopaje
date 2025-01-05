<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proceso extends Model
{
    protected $fillable = ['name'];

    public function lots():HasMany
    {
        return $this->hasMany(Lot::class);
    }
}
