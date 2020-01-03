<?php

namespace App\Http\Controllers;
if (!isset($_SESSION)){session_start();}
use App\etudiant;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Resources\Etudiant as EtudiantResource;

class etudiantsController extends BaseController
{
/**
 * Retourne les details des etudiants d'un groupe
 *
 * Retourne : nom, prenom, matricule, date et lieu de naissance de chaque etudiant
 *
 * @deprecated
 */
     public function index ()
     {
           $u=$_SESSION['gro'];
           $etudiants=DB::table('users')
           ->join('etudiants','etudiants.id','users.id')
           ->where('groupe',$u)
           ->orderBy('name', 'asc')
           ->get();
           return EtudiantResource::collection($etudiants);
    }
 /**
 * Saisie les Absences d'un groupe dans une date
 *
 * Retourne la liste des etudiants pour saisir les absences et les sauvegarder dans la BDD
 *
 * @deprecated
 */
    public function abse (Request $request)
    { 
              
           $gr = request('gr');
           $fins=DB::table('users')
           ->join('etudiants','etudiants.id','users.id')
           ->where('groupe',$gr)
           ->orderBy('name', 'asc')
           ->get();
            return view('insererabsences', compact('fins'));
    } 
 /**
 * Affichge de la liste des etudiants d'un groupe
 *
 * Retourne la liste des etudiants (nom, prenom, matricule, date et lieu de naissance) d'un groupe
 *
 * @deprecated
 */
    public function ab (Request $request)
    { 
          $gr = request('gr');
          $_SESSION['gro']=$gr;
            return view('affiche', array());
    } 
        
}
    