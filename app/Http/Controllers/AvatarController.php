<?php

namespace App\Http\Controllers;

use App\Models\avatar;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function create(){

        return view('avatars.avatar');

    }

    public function store(Request $request){
        $avatar = new avatar();
        $avatar->nombre_avatar=$request->nombre_avatar;
        $avatar->niños_id_niño=$request->niños_id_niño;
        $avatar->save();
        return $request;
     }

    public function index(){

        $avatars = avatar::orderBy('id', 'desc')->get();
        return view('avatars/listar', compact('avatars'));
    }
     public Function show (avatar $avatar){

        return view('avatars/show', compact('avatar'));

    }
    public function destroy(avatar $avatar) {
        $avatar->delete();
        return redirect()->route('avatar.index');
    }
}
