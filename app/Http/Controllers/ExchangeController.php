<?php

namespace App\Http\Controllers;
use App\Models\exchange;
use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    public function create(){

        return view('canjes.exchange');

    }

    public function Store(Request $request){
        $exchange = new exchange ();
        $exchange->desc_can=$request->desc_can;
        $exchange->ava_avatar=$request->ava_avatar;
        $exchange->art_article=$request->art_article;
        $exchange->save();
        return $request;
     }

    public function index(){

        $excs = exchange::orderBy('id', 'desc')->get();
        return view('canjes/listar', compact('excs'));
    }
     public Function show (exchange $exchange){

        return view('canjes/show', compact('exchange'));

    }
    public function destroy(exchange $exchange) {
        $exchange->delete();
        return redirect()->route('exchange.index');
    }
}
