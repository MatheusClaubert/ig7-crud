<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        $professores = Professor::all();
        return view('professores.index', compact('professores'));
    }

    public function create()
    {
        return view('professores.create');
    }

    public function store(Request $request)
    {
        Professor::create($request->all());
        return redirect('/professores')->with('success', 'Professor criado com sucesso.');
    }

    public function show(Professor $professor)
    {
        return view('professores.show', compact('professor'));
    }

    public function edit(Professor $professor)
    {
        return view('professores.edit', compact('professor'));
    }

    public function update(Request $request, Professor $professor)
    {
        $professor->update($request->all());
        return redirect('/professores')->with('success', 'Professor atualizado com sucesso.');
    }

    public function destroy(Professor $professor)
    {
        $professor->delete();
        return redirect('/professores')->with('success', 'Professor removido com sucesso.');
    }
}
