<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lot extends Model
{
    protected $fillable = [
        'customer_id',
        'referenre_id',
        'acopio_id',
        'huerto_id',
        'guia',
        'peso_externo',
        'peso_interno',
        'total_tarimas',
        'proceso_id',
        'tipo',
        'marca',
        'color',
        'placa',
        'chofer',
        'comentarios',
        'status'
    ];
    public function huerto():BelongsTo
    {
        return $this->belongsTo(Huerto::class);
    }
    public function proceso():BelongsTo
    {
        return $this->belongsTo(Proceso::class);
    }
    public function customer():BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    public function referente():BelongsTo
    {
        return $this->belongsTo(Referente::class);
    }
    public function acopio():BelongsTo
    {
        return $this->belongsTo(Acopio::class);
    }
    public function truck():BelongsTo
    {
        return $this->belongsTo(Truck::class);
    }
}
