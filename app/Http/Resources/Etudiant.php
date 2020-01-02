<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Etudiant extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'matricule' => $this->matricule,
            'date_naissance' => $this->date_naissance,
            'lieu_naissance' => $this->lieu_naissance,
            'groupe' => $this->groupe,
            'name' => $this->name
           
           
        ];
 
    }

   /* public function with($request) {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://traversymedia.com')
        ];
    }*/
}
