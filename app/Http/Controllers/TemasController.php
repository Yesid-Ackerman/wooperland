<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temas;
class TemasController extends Controller
{
    public function createtopic(){ 
        return view ('topics.topic');
    }

    public function readtopic(Request $Request){
      $Temas=new Temas;    
      $Temas->Nombre_tema=$Request->Nombre_tema;
      $Temas->Descripcion_tema=$Request->Descripcion_tema;
      $Temas->save();
      return $Temas;
      
    }

    public function listTopic(){ 
        $topics = Temas::orderBy('id','asc')->get();
        return view('topics/listtopic', compact('topics'));
    }
    public function showtopic($id){
        $topics= Temas::find($id);  
        return $topics;
    }

    public function destroytopic(Temas $topics){
      $topics->delete();
      return redirect()->route('list.Topic');
    }
}
