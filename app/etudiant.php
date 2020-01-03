<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Resources\Etudiant as EtudiantResource;

class etudiant extends Model
{


public function index1 ($u)
     {


           /*$etudiants=DB::table('users')
           ->join('etudiants','etudiants.id','users.id')
           ->where('groupe',$u)
           ->orderBy('name', 'asc')
           ->get();*/

           return '2cp7';
    }
}
