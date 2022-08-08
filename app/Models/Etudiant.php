<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    protected $fillable = ["matri_etud", "date_naiss_etud", "bio", "promotion", "id_user", "id_classe", "deleted_at"];
}
