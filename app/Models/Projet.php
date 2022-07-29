<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    protected $fillable = [
        'titre_projet',
        'nom_solution_projet',
        'domaine_projet',
        'description_projet',
        'img_projet',
        'deleted_at',
    ];
}
