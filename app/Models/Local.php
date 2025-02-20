<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'endereco',
        'capacidade',
        'preco_hora',
        'imagem',
        'status',
        'user_id',
        'categoria_id',
    ];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria()
    {
        return $this->belongsTo(CategoriaLocal::class);
    }
}
