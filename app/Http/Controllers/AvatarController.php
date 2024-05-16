<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avatar;

class AvatarController extends Controller
{
    public function create()
    {
        return view('avatars.avatar');
    }

    public function store(Request $request)
    {
        $avatar = new Avatar();
        $avatar->nombre_avatar = $request->nombre_avatar;
        $avatar->niños_id_niño = $request->niños_id_niño;
        $avatar->save();

        return redirect()->route('avatar.index');
    }

    public function index()
    {
        $avatars = Avatar::orderBy('id', 'desc')->get();
        return view('avatars.listar', compact('avatars'));
    }

    public function show(Avatar $avatar)
    {
        return view('avatars.show', compact('avatar'));
    }

    public function destroy(Avatar $avatar)
    {
        $avatar->delete();
        return redirect()->route('avatar.index');
    }

    public function edit(Avatar $avatar)
    {
        return view('avatars.editar', compact('avatar'));
    }

    public function update(Request $request, Avatar $avatar)
    {
        $avatar->nombre_avatar = $request->nombre_avatar;
        $avatar->niños_id_niño = $request->niños_id_niño;
        $avatar->save();

        return redirect()->route('avatar.index');
    }
}
