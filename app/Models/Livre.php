<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'resume',
        'auteur',
        'fichier',
        'id_type_livre',
        'img_couverture',
        'deleted_at',
    ];
}
