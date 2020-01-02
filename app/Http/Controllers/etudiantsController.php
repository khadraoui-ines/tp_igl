<?php

namespace App\Http\Controllers;


use App\etudiant;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class etudiantsController extends BaseController
{

     public function index ()
     {
        /*$etudiants=etudiant::where('groupe','2cp7')->get();
        $i=0;
        $s=array();
        foreach($etudiants as $etudiant){
            $s[$i]=$etudiant->id;
            $i++;
           }
        $users=user::wherein('id',$s)->get();*/

       /* $userss = DB::table('users')
        ->orderBy('name', 'asc')
        ->get();*/
           $fins=DB::table('users')
           ->join('etudiants','etudiants.id','users.id')
           ->where('groupe','2cp7')
           ->orderBy('name', 'asc')
           ->get();


          // $fins = \fin::all()->sortBy('name', 'desc');
         //  $users = \User::orderBy('approved', 'desc')->get();
          // $fins=fin::where('groupe','2cp7')->get();

            return view('index', compact('fins'));



        }
    }
//////////////////////////////////////////////////////


    /*  $users = DB::table('users')
           ->join('etudiants', 'users.id', '=', 'etudiants.id');*/


      /*  $i=0;
       foreach($etudiants as $etudiant){
            $s[$i]=$etudiant->id;
            $i++;
             }
             echo('user');
             $users1=user::where('id',$s[0])->get();
             $users2=user::where('id',$s[1])->get();


        return view('index', compact('etudiants','users1','users2'));
        /*$results = User::where($matchThese)
    ->orWhere($orThose)
    ->get();*/







