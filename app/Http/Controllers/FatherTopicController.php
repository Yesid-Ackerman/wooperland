<?php

namespace App\Http\Controllers;

use App\Models\Father;
use App\Models\FatherTopic;
use App\Models\kid;
use Illuminate\Http\Request;

class FatherTopicController extends Controller
{
    public function create()
    {
        return view('padretema.create');
    }

    public function index()
    {
        $fatherTopics = FatherTopic::orderBy('id','asc')->get();
        return view('padretema/listar', compact('fatherTopics'));
    }

    public function store(Request $request)
    {
        $fatherTopic = new FatherTopic();
        $fatherTopic->id=$request->id;
        $fatherTopic->fk_id_padre=$request->fk_id_padre;
        $fatherTopic->fk_id_tema=$request->fk_id_tema;
        $fatherTopic->descripcion=$request->descripcion;
        $fatherTopic->save();
        return $fatherTopic;
        
    }

    public function show(FatherTopic $fatherTopic)
    {
        //$fatherTopics=FatherTopic::find($id);
        //$fatherTopics;
        return view('padretema.show', compact('fatherTopic')); 
    }

    public function destroy($id)
    {
        $fatherTopic = FatherTopic::findOrFail($id);
        $fatherTopic->delete();
        return redirect()->route('padretema.index');
    }
}
