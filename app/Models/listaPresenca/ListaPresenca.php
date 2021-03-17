<?php

namespace App\Models\listaPresenca;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaPresenca extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'professor_id',
        'aluno_id',
        'data',
    ];
}
