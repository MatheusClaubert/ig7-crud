<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escola;

class EscolaController extends Controller
{
    public function index()
    {
        $escolas = Escola::all();
        return view('escolas.index', compact('escolas'));
    }

    public function create()
    {
        return view('escolas.create');
    }

    public function store(Request $request)
    {
        Escola::create($request->all());
        return redirect('/escolas')->with('success', 'Escola criada com sucesso.');
    }

    public function show(Escola $escola)
    {
        return view('escolas.show', compact('escola'));
    }

    public function edit(Escola $escola)
    {
        return view('escolas.edit', compact('escola'));
    }

    public function update(Request $request, Escola $escola)
    {
        $escola->update($request->all());
        return redirect('/escolas')->with('success', 'Escola atualizada com sucesso.');
    }

    public function destroy(Escola $escola)
    {
        $escola->delete();
        return redirect('/escolas')->with('success', 'Escola removida com sucesso.');
    }
}
