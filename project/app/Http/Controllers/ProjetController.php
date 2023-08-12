<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Service;


class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.projet.index', [
            'projets' => Projet::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.projet.create', [
            'services' => Service::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Projet::create([
            'nom_projet' => $request->nom_projet,
            'lieu_projet' => $request->lieu_projet,
            'd_debut' => $request->d_debut,
            'd_fin' => $request->d_fin,
            'budjet' => $request->budjet,
            'm_ouvrage' => $request->m_ouvrage,
            'm_oeuvre' => $request->m_oeuvre,
            'descript' => $request->descript,
            'statut' => $request->statut,
            'voir_plus' => $request->voir_plus,
            'users_id' => $request->users_id,
            'services_id' => $request->services_id,
            'devis' => $request->devis->store('devis', 'public'),
            'img_avant' => $request->img_avant->store('img_pub', 'public'),
            'img_apres' => $request->img_apres->store('img_pub', 'public'),
        ]);
        return redirect()->route('gestion_projet.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.pages.projet.show', [
            'finds' =>  Projet::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proj = Projet::find($id);
        $proj->update([
            'nom_projet' => $request->nom_projet,
            'lieu_projet' => $request->lieu_projet,
            'd_debut' => $request->d_debut,
            'd_fin' => $request->d_fin,
            'budjet' => $request->budjet,
            'm_ouvrage' => $request->m_ouvrage,
            'm_oeuvre' => $request->m_oeuvre,
            'descript' => $request->descript,
            'statut' => $request->statut,
            'voir_plus' => $request->voir_plus,
            'users_id' => $request->users_id,
            'services_id' => $request->services_id,
            'devis' => $request->devis->store('devis', 'public'),
            'img_avant' => $request->img_avant->store('img_pub', 'public'),
            'img_apres' => $request->img_apres->store('img_pub', 'public'),
        ]);

        return redirect()->route('gestion_projet.index')->with('message', 'Projet modifié avec succèss !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proj = Projet::find($id);
        $proj->delete();
        return redirect()->route('gestion_projet.index')->with('message', 'Projet supprimé avec succèss !');
    }
}
