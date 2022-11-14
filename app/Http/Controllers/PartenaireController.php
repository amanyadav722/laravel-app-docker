<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;
use App\Http\Requests\StorePartenaireRequest;
use App\Http\Requests\UpdatePartenaireRequest;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('partenaires.index')->with('success','Enregistrement réussi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partenaires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePartenaireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Enregistrer les informations des inputs

        $request->validate([
            'name' => 'required',
            'mail' => 'required',
            'phone' => 'required',
        ]);

        //Créer un nouveaux produits
        Partenaire::create($request->all());
        $test = [
            'name' => 'Test',
            'mail' => 'test@test.com',
            'phone' => '0102030405'
        ];
        //Partenaire::create($test);

        //Rediriger l'utilisateur et envoyer un message

        return redirect()->route('partenaires.index')->with('success','Enregistrement réussi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function show(Partenaire $partenaire)
    {
        return redirect()->route('partenaires.show')->with('success','Enregistrement réussi');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Partenaire $partenaire)
    {
        return redirect()->route('partenaires.edit')->with('success','Enregistrement réussi');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartenaireRequest  $request
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartenaireRequest $request, Partenaire $partenaire)
    {
        return redirect()->route('partenaires.update')->with('success','Enregistrement réussi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partenaire $partenaire)
    {
        //
    }
}
