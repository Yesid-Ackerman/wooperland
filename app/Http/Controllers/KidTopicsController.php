<?php

namespace App\Http\Controllers;

use App\Models\kid;
use App\Models\KidTopics;
use App\Models\Temas;
use Illuminate\Http\Request;

class KidTopicsController extends Controller
{
    public function create()
    {
        return view('niñotema.create');
    }

    public function index()
    {
        $kidTopicss = KidTopics::orderBy('id','asc')->get();
        return view('niñotema/listar', compact('kidTopicss'));
    }
    
    public function store(Request $request)
    {
        $kidTopics = new KidTopics();
        $kidTopics->id=$request->id;
        $kidTopics->fk_id_niño=$request->fk_id_niño;
        $kidTopics->fk_id_tema=$request->fk_id_tema;
        $kidTopics->save();
        return $kidTopics;
    }

    
    public function show($id)
    {
        $kidTopicss=KidTopics::find($id);
        return $kidTopicss;
        //return view('niñotema.show', compact('kidTopics')); 
    }

   
    public function destroy($id)
    {
        $kidTopicss = KidTopics::findOrFail($id);
        $kidTopicss->delete();
        return redirect()->route('niñotema.index');
        //$kidTopics->delete();
        //return redirect()->route('niñotema.index');
    }

    public function asociar(){

        $kids = kid::all();
        $temas = Temas::all();
       
        return view('niñotema.asociar',compact('kids','temas'));

    }

    public function kidtopicstore(Request $request){

        $kid=kid::find($request->kid_id);
        $kid->roles()->attach($request->tema_id);

    }
}
