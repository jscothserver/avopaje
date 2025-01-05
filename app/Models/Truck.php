<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $fillable = ['tipo','marca','color','placas','chofer'];

    public function lots()
    {
        return $this->hasMany(Lot::class);
    }
}
