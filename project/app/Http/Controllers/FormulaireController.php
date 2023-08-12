<?php

namespace App\Http\Controllers;

use App\Models\Formulaire;
use App\Models\Service;
use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.document.index', [
            'documents' => Formulaire::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.document.create', [
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
        $donne = $request->all();
        if ($request->file != null) {
            $donne['file'] = $request->file->store('file', 'public');
        }
        Formulaire::create($donne);

        return redirect()->route('gestion_document.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $form = Formulaire::find($id);
        $form->update([
            'nom_fichier' => $request->nom_fichier,
            'voir_plus' => $request->voir_plus,
            'services_id' => $request->services_id,
            'users_id' => $request->users_id,
            'file' => $request->file->store('file', 'public'),
        ]);

        return redirect()->route('gestion_document.index')->with('message', 'Document modifié avec succèss !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form = Formulaire::find($id);
        $form->delete();
        return redirect()->route('gestion_document.index')->with('message', 'Projet supprimé avec succèss !');
    }
}
