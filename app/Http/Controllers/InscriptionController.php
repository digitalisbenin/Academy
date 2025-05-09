<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request);
        $validatedData = $request->validate([

            'civilite' => 'required|max:255',
            'pays' => 'nullable',
            'diplome_url' => 'nullable',
            'identite_url' => 'nullable',
            'photo_url' => 'nullable',
            'filiere_id' => 'required|exists:filieres,id',

        ]);
        //$chapitre = Chapitre::create($validatedData);
        $chapitre = new Inscription();

        if ($request->hasFile('diplome_url')) {
            $file = $request->file('diplome_url');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/diplome',$filename);
            $chapitre->diplome_url = $filename;
        }
        if ($request->hasFile('identite_url')) {
            $file = $request->file('identite_url');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/identite',$filename);
            $chapitre->identite_url = $filename;
        }
        if ($request->hasFile('photo_url')) {
            $file = $request->file('photo_url');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/photo',$filename);
            $chapitre->photo_url = $filename;
        }

        $chapitre->civilite = $request->civilite;
        $chapitre->nom = $request->nom;
        $chapitre->prenom = $request->prenom;
        $chapitre->nationalite = $request->nationalite;
        $chapitre->pays = $request->pays;
        $chapitre->dateNaissance = $request->dateNaissance;
        $chapitre->ville = $request->ville;
        $chapitre->phone = $request->phone;
        $chapitre->email = $request->email;
        $chapitre->numwhat = $request->numwhat;

        $chapitre->filiere_id = $request->filiere_id;
        $chapitre->niveau_etude_id = $request->niveau_etude_id;
        $chapitre->save();

        return redirect('/')->with('success', 'Inscriptions créée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $inscription = Inscription::findOrfail($id);
        return view('details', compact('inscription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscription $inscription)
    {
        //
    }
}
