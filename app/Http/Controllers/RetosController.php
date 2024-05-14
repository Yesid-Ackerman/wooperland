<?php

namespace App\Http\Controllers;
use App\Models\Retos;
use Illuminate\Http\Request;

class RetosController extends Controller
{
    public function createchallenge(){ 
        return view ('challenges.challenge');
    }

    public function readchallenge(Request $Request){
      $Retos=new Retos();
      $Retos->Nombre_Reto=$Request->Nombre_Reto;
      $Retos->Descripcion_Reto=$Request->Descripcion_Reto;
      $Retos->Actividad_Reto=$Request->Actividad_Reto;
      $Retos->Premio_Reto=$Request->Premio_Reto;
      $Retos->save();
      return $Retos;
    }
    public function listchallenge(){ 
        $challenges = Retos::orderBy('id','asc')->get();
        return view('challenges/listchallenge', compact('challenges'));
    }
    public function showchallenge($id){
        $challenges=Retos::find($id);  
        return $challenges;
    }

    public function destroychallenge(Retos $challenges){
      $challenges->delete();
      return redirect()->route('list.challenge');
    }
}
