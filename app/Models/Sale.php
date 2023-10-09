<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['service_id', 'client_id', 'quantity', 'price'];


    public function client():BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function service():BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
