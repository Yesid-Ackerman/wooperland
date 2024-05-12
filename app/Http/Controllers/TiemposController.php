<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiempos;
class TiemposController extends Controller
{
    public function createperiod(){ 
        return view ('periods.time');
    }

    public function readperiod(Request $Request){
      $Tiempos=new Tiempos;    
      $Tiempos->Tiempodeuso_tiempo=$Request->Tiempodeuso_tiempo;
      $Tiempos->Descripcion_tiempo=$Request->Descripcion_tiempo;
      $Tiempos->save();
      return $Tiempos;
      
    }

    public function listperiod(){ 
        $periods = Tiempos::orderBy('id','asc')->get();
        return view('periods/listtime', compact('periods'));
    }
    public function showperiod($id){
        $topics= Tiempos::find($id);  
        return $topics;
    }

    public function destroyperiod(Tiempos $periods){
      $periods->delete();
      return redirect()->route('list.period');
    }
}
