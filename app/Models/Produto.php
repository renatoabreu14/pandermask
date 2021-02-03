<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    const TAMANHO = [
        1 => 'P',
        2 => 'M',
        3 => 'G',
        4 => 'GG',
        5 => 'XG'
    ];

    protected $fillable = [
        'descricao', 'tamanho', 'generomasc', 'vlrproduto', 'estoque', 'imagem', 'categoria_id'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
