<?php

namespace App\Models\pagamento;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'livro_id',
        'materia_id',
        'teste_id',
        'video_id',
        'professor_id',
        'user_id'
    ];
}
