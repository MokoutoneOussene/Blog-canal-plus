<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Role;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.user.index', [
            'users' => User::orderBy('statut', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.user.create', [
            'services' => Service::all(),
            'roles' => Role::all()
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
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'identifiant' => $request->identifiant,
            'code' => $request->code,
            'statut' => $request->statut,
            'roles_id' => $request->roles_id,
            'photo' => $request->photo->store('user_img', 'public'),
            'services_id' => $request->services_id,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('gestion_user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.pages.user.show', [
            'finds' =>  User::find($id),
            'posts' => Post::where('users_id', '=', $id)->get(),
            'comments' => Comment::where('users_id', '=', $id)->get(),
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
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'identifiant' => $request->identifiant,
            'code' => $request->code,
            'statut' => $request->statut,
            'roles_id' => $request->roles_id,
            'services_id' => $request->services_id,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('gestion_user.index')->with('message', 'Utilisateur modifié avec succèss !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('gestion_user.index')->with('message', 'Utilisateur supprimé avec succèss !');
    }
}
