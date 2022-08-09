<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Filiere;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function profilIndex()
    {
        $user = Auth::user();
        if ($user->role_user == 'Etudiant') {
            $user['etudiant'] = Etudiant::where('id_user', $user->id)->first();
            $user['etudiant']['classe'] = Classe::find($user['etudiant']->id_classe);
            if ($user['etudiant']['classe'] != null)
                $user['etudiant']['filiere'] = Filiere::find($user['etudiant']['classe']->id_filiere);
        }
        $result = session()->get('result') ?? null;
        // Affichage
        return view('dashboard.pages.profil.index', compact('user', 'result'));
    }

    public function updateCV(Request $request)
    {
        $result = ['state' => 'error', 'message' => ''];
        try {
            $etudiant = Etudiant::where('id_user', Auth::user()->id)->first();
            $etudiant->cv_path = 'cv/CV_' .  $etudiant->matri_etud . '.pdf';
            $etudiant->save();
            //Enregistrement du fichier du CV
            $uploaded_file_path = $request->file('cv')->storeAs('cv', 'CV_' .  $etudiant->matri_etud . '.pdf');
            $is_file_moved = File::moveDirectory(storage_path('app/' . $uploaded_file_path), public_path($etudiant->cv_path));
            if ($is_file_moved) {
                $result['state'] = 'success';
                $result['message'] = "Le changement du CV a bien été effectué.";
            } else {
                $result['state'] = "error";
                $result['message'] = "Le fichier du CV n'a pas pu être importé.";
            }
        } catch (Exception $exc) { // ! En cas d'erreur
            $result['state'] = 'error';
            $result['message'] = $exc->getMessage();
        }
        // Affichage
        return redirect()->back()->with('result', $result);
    }
}
