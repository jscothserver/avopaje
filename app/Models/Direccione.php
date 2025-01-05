<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Direccione extends Model
{
    protected $fillable = [
        'customer_id',
        'direccion',
        'colonia',
        'codigo_postal',
        'ciudad',
        'estado',
    ];

    public function customer():BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
