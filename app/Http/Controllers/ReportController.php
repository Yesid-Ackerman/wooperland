<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function create(){

        return view('informes.reports');

    }

    public function store(Request $request){
        $report = new Report();
        $report->grafico=$request->grafico;
        $report->calificacion=$request->calificacion;
        $report->detalles=$request->detalles;
        $report->nivel_mas_jugado=$request->nivel_mas_jugado;
        $report->padre=$request->padre;
        $report->save();
        return $request;
     }

    public function index(){

        $reports = report::orderBy('id', 'desc')->get();
        return view('informes/listar', compact('reports'));
    }
     public Function show ($id){

        $report=report::find($id);
        $report;
        return view('informes/show', compact('report'));

    }
    public function destroy($id) {
        $report = report::findOrFail($id);
        $report->delete();
        return redirect()->route('report.index');
    }
}
