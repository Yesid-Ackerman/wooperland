<?php

namespace App\Http\Controllers;
use App\Models\Parental_control;
use Illuminate\Http\Request;

class ParentalControlController extends Controller
{
    //
    public function create(){

        return view('control_parentales.parentales');

    }

    public function store(Request $request){
        $parental_control = new parental_control();
        $parental_control->pin_control_parental=$request->pin_control_parental;
        $parental_control->save();
        return $request;
     }

    public function index(){

        $parental_controls = Parental_control::orderBy('id', 'desc')->get();
        return view('control_parentales/listar', compact('parental_controls'));
    }
     public Function show ($id){

        $parental_control=Parental_control::find($id);
        $parental_control;
        return view('control_parentales/show', compact('parental_control'));

    }
    public function destroy($id) {
        $parental_control = Parental_control::findOrFail($id);
        $parental_control->delete();
        return redirect()->route('parental_control.index');
    }
}

