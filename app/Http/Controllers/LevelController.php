<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    
    //
    public function create(){

        return view('niveles.levels');

    }

    public function store(Request $request){
        $level = new Level();
        $level->name=$request->name;
        $level->description=$request->description;
        $level->characteristic=$request->characteristic;
        $level->prize=$request->prize;
        $level->issue=$request->issue;
        $level->save();
        return $request;
     }

    public function index(){

        $levels = level::orderBy('id', 'desc')->get();
        return view('niveles/listar', compact('levels'));
    }
     public Function show ($id){

        $level=level::find($id);
        $level;
        return view('niveles/show', compact('level'));

    }
    public function destroy($id) {
        $level = level::findOrFail($id);
        $level->delete();
        return redirect()->route('level.index');
    }
}

