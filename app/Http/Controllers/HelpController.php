<?php

namespace App\Http\Controllers;
use App\Models\help;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function create(){

        return view('ayudas.help');

    }

    public function Store(Request $request){
        $help = new help ();
        $help->desc_ayu=$request->desc_ayu;
        $help->niveles_id_nivel=$request->niveles_id_nivel;
        $help->save();
        return $request;
     }

    public function index(){

        $helps = help::orderBy('id', 'desc')->get();
        return view('ayudas/listar', compact('helps'));
    }
     public Function show (help $help){

        return view('ayudas/show', compact('help'));

    }
    public function destroy(help $help) {
        $help->delete();
        return redirect()->route('help.index');
    }
}
