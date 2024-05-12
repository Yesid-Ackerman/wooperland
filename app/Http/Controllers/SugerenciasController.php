<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sugerencias;
class SugerenciasController extends Controller
{
    public function createsuggestion(){ 
        return view ('suggestions.suggestion');
    }

    public function readsuggestion(Request $Request){
      $Sugerencias=new Sugerencias;    
      $Sugerencias->Tema_sugerencia=$Request->Tema_sugerencia;
      $Sugerencias->Actividad_sugerencia=$Request->Actividad_sugerencia;
      $Sugerencias->Caracteristica_sugerencia=$Request->Caracteristica_sugerencia;
      $Sugerencias->save();
      return $Sugerencias;
      
    }

    public function listsuggestion(){ 
        $suggestions = Sugerencias::orderBy('id','asc')->get();
        return view('suggestions/listsuggestion', compact('suggestions'));
    }
    public function showsuggestion($id){
        $suggestions= Sugerencias::find($id);  
        return $suggestions;
    }

    public function destroysuggestion(Sugerencias $suggestions){
      $suggestions->delete();
      return redirect()->route('list.suggestion');
    }
}
