<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingresso extends Model
{
    use HasFactory;

    protected $table = 'ingressos';

    protected $fillable = [
        'evento_id',
        'tipo',
        'preco',
        'quantidade_disponivel',
    ];

    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }
}
