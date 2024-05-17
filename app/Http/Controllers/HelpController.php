<?php

namespace App\Http\Controllers;

use App\Models\Help;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function create()
    {
        return view('ayudas.help');
    }

    public function store(Request $request)
    {
        $help = new Help();
        $help->desc_ayu = $request->desc_ayu;
        $help->niveles_id_nivel = $request->niveles_id_nivel;
        $help->save();

        return redirect()->route('help.index');
    }

    public function index()
    {
        $helps = Help::orderBy('id', 'desc')->get();
        return view('ayudas.listar', compact('helps'));
    }

    public function show(Help $help)
    {
        return view('ayudas.show', compact('help'));
    }

    public function destroy(Help $help)
    {
        $help->delete();
        return redirect()->route('help.index');
    }

    public function edit(Help $help)
    {
        return view('ayudas.editar', compact('help'));
    }

    public function update(Request $request, Help $help)
    {
        $help->desc_ayu = $request->desc_ayu;
        $help->niveles_id_nivel = $request->niveles_id_nivel;
        $help->save();

        return redirect()->route('help.index');
    }
}
