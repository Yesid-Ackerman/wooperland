<?php

namespace App\Http\Controllers;

use App\Models\kid;
use Illuminate\Http\Request;

class KidController extends Controller
{
    public function create()
    {
        return view('niños.createkid');
       
    }

    public function store(Request $request)
    {
        $kid = new kid();
        $kid->id=$request->id;
        $kid->nombre=$request->nombre;
        $kid->apellido=$request->apellido;
        $kid->edad=$request->edad;
        $kid->nickname=$request->nickname;
        $kid->save();

        return $kid;
    }

    public function index()
    {
        $kids = Kid::orderBy('id','asc')->get();
        return view('niños/listar', compact('kids'));
    }
    
    
    public function show(Kid $kid){
        //$kids=Kid::find($id);
        //$kids;
        return view('niños.show', compact('kid'));
    }
    
    public function destroy($id) 
    {
        $kids = kid::findOrFail($id);
        $kids->delete();
        return redirect()->route('niños.index');
        //$kids->delete();
        //return redirect()->route('niños.index');
    }
}

