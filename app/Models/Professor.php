<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    protected $table = 'escolas';

    protected $fillable = [
        'status',
        'inep',
        'endereco',
        'nome',
    ];

    // Relacionamento com as turmas
    public function turmas()
    {
        return $this->hasMany(Turma::class, 'id_escola');
    }
}