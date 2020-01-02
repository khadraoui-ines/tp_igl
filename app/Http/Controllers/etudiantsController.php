<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\etudiant;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class etudiantsController extends BaseController
{ 
     public function index (Request $request)
     { 
       $gr = request('gr');
       $etudiants=etudiant::where('groupe', $gr)->get();
       return view('affiche',compact('etudiants'));
     }
}
