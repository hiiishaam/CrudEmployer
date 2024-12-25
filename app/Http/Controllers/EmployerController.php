<?php

namespace App\Http\Controllers;

use App\Models\Employer; // Import du modèle Employer
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Afficher la liste des employeurs.
     */
    public function index()
    {
        $employers = Employer::all();
        return view('employers.index', compact('employers'));
    }

    /**
     * Afficher le formulaire de création d'un employé.
     */
    public function create()
    {
        return view('employers.create');
    }

    /**
     * Enregistrer un nouvel employé.
     */
    public function store(Request $request)
    {
        

        Employer::create($request->all());

        return redirect()->route('employers.index')->with('success', 'Employé ajouté avec succès.');
    }

    /**
     * Afficher les détails d'un employé.
     */
    public function show($id)
    {
        $employer = Employer::findOrFail($id);
        return view('employers.show', compact('employer'));
    }

    /**
     * Afficher le formulaire d'édition d'un employé.
     */
    public function edit($id)
    {
        $employer = Employer::findOrFail($id);
        return view('employers.edit', compact('employer'));
    }

    /**
     * Mettre à jour les informations d'un employé.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:employers,email,' . $id,
            'position' => 'required',
            'salary' => 'required|numeric',
        ]);

        $employer = Employer::findOrFail($id);
        $employer->update($request->all());

        return redirect()->route('employers.index')->with('success', 'Employé mis à jour avec succès.');
    }

    /**
     * Supprimer un employé.
     */
    public function destroy($id)
    {
        $employer = Employer::findOrFail($id);
        $employer->delete();

        return redirect()->route('employers.index')->with('success', 'Employé supprimé avec succès.');
    }
}
