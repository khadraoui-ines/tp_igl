<?php

namespace App\Http\Controllers;

use App\etudiant;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class etudiantsController extends BaseController
{

     public function index ()
     {
        // return etudiant::get();
     //$e = etudiant::where('matricule','17/200')->get();

      //echo $e;
      $etudiants = etudiant::paginate(1);
      return view ('index',compact('etudiants'));
     }
}
