<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view ('partners.index')->with('partners', $partners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.create');
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
        Partner::create($request->all());
     
        //Partenaire::create($test);

        //Rediriger l'utilisateur et envoyer un message

        return redirect()->route('partners.index')->with('success','Enregistrement réussi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partners = Partner::find($id);
        return view('partners.show')->with('partners', $partners);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner $partenaire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partners = Partner::find($id);
        return view('partners.edit')->with('partners', $partners);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $partners = Partner::find($id);
        $input = $request->all();
        $partners->update($input);
        return redirect('partners')->with('flash_message', 'Partners Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner $partenaire
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Partner::destroy($id);
        return redirect('partners')->with('flash_message', 'Partners deleted!');
    }
}
