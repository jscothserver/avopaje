<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Referente extends Model
{
    protected $fillable = ['customer_id','nombre','phone'];
    public function customer():BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    public function referente():BelongsTo
    {
        return $this->belongsTo(Referente::class);
    }
}
