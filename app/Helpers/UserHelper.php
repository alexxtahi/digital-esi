<?php

namespace App\Helpers;

use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Filiere;
use Illuminate\Support\Facades\Auth;

class UserHelper
{
    public static function getAuthUser()
    {
        $user = null;
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role_user == 'Etudiant') {
                $user['etudiant'] = Etudiant::where('id_user', $user->id)->first();
                $user['etudiant']['classe'] = Classe::find($user['etudiant']->id_classe);
                if ($user['etudiant']['classe'] != null)
                    $user['etudiant']['filiere'] = Filiere::find($user['etudiant']['classe']->id_filiere);
            }
        }
        return $user;
    }
}
