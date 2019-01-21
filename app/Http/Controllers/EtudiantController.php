<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    //
    public function add(Request $request)
    {
        Etudiant::create($request->all());
        return back()->with('status',trans('etudiant.msgEnregOk'));
    }

    public function show($id)
    {

        $etudiant = Etudiant::findById($id);
        return view('etudiant.show',compact('etudiant'));
    }

    public function edit($id)
    {
        $etudiant = Etudiant::findorfail($id);
        return view('etudiant.edit',compact('etudiant'));
    }

    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::findorfail($id);
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->save();
        return back()->with('status',trans('etudiant.msgMAJOk'));

    }
}
