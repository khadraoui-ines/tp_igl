<?php
namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;
use App\absence;
use App\etudiant;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
class absencesController extends BaseController
{
     public function inserer (Request $request)
     {
      $e= $_SESSION['etud'];
      $t =request('abs');
      $m= sizeof($t);
      /*groupe*/   
      $hs=DB::table('etudiants')
      ->where('matricule',$e[0])
      ->get();
      foreach ($hs as $h){
      $g = $h->groupe;}
      /*module*/
      $fs=DB::table('enseignant_modules')
      ->where('id',$_SESSION['id_enseignant'])
      ->where('groupe',$g)
      ->get();
      foreach ($fs as $f){
          $module = $f->module;}
      for($j=0;$j<$m;$j++)
      {
           if($t[$j]=='n') /*inserer l'absence*/
           {
               $abs = new absence();
               $abs->module =  $module;
               $abs->matricule = $e[$j];
               $abs->date_abs = request('date');
               $abs->save();   
           }
      }
      $_SESSION['etud']="";
      return view('accueil');
     }   

}