<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Publication;
use App\Models\Service;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.publication.index', [
            'publications' => Publication::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.publication.create', [
            'category' => Categorie::all(),
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
        if ($request->img != null) {
            $donne['img'] = $request->img->store('img_pub', 'public');
        }
        Publication::create($donne);

        return redirect()->route('gestion_publication.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.pages.publication.show', [
            'finds' =>  Publication::find($id),
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
        $pub = Publication::find($id);
        $pub->update([
            'nom_pub' => $request->nom_pub,
            'lieu' => $request->lieu,
            'date' => $request->date,
            'heure' => $request->heure,
            'descript' => $request->descript,
            'img' => $request->img->store('img_pub', 'public'),
            'voir_plus' => $request->voir_plus,
            'services_id' => $request->services_id,
            'statut' => $request->statut,
            'users_id' => $request->users_id,
            'categories_id' => $request->categories_id,
        ]);

        return redirect()->route('gestion_publication.index')->with('message', 'Publication modifiée avec succèss !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pub = Publication::find($id);
        $pub->delete();
        return redirect()->route('gestion_publication.index')->with('message', 'Publication supprimé avec succèss !');
    }
}
