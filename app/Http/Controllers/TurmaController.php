<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurmaController extends Controller
{
    public function index()
    {
        $turmas = Turma::all();
        return view('turmas.index', compact('turmas'));
    }

    public function create()
    {
        $professores = Professor::all();
        return view('turmas.create', compact('professores'));
    }

    public function store(Request $request)
    {
        $turma = Turma::create($request->all());
        $turma->professores()->attach($request->professores);
        return redirect('/turmas')->with('success', 'Turma criada com sucesso.');
    }

    public function show(Turma $turma)
    {
        return view('turmas.show', compact('turma'));
    }

    public function edit(Turma $turma)
    {
        $professores = Professor::all();
        return view('turmas.edit', compact('turma', 'professores'));
    }

    public function update(Request $request, Turma $turma)
    {
        $turma->update($request->all());
        $turma->professores()->sync($request->professores);
        return redirect('/turmas')->with('success', 'Turma atualizada com sucesso.');
    }

    public function destroy(Turma $turma)
    {
        $turma->delete();
        return redirect('/turmas')->with('success', 'Turma removida com sucesso.');
    }

    public function attachProfessores(Request $request, Turma $turma)
    {
        $turma->professores()->attach($request->professores);
        return redirect('/turmas/' . $turma->id)->with('success', 'Professores vinculados com sucesso.');
    }

    public function detachProfessor(Turma $turma, Professor $professor)
    {
        $turma->professores()->detach($professor);
        return redirect('/turmas/' . $turma->id)->with('success', 'Professor removido da turma com sucesso.');
    }
}