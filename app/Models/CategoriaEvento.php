<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaEvento extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'evento_id'); 
    }
}
