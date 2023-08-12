<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Mail\UserMail;
use App\Models\Projet;
use App\Models\Comment;
use App\Models\Categorie;
use App\Models\Formulaire;
use App\Models\CommentPost;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         return view('internaut.pages.auth');
     }

     public function register()
     {
         return view('internaut.pages.register');
     }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
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

        Mail::to('issoufsawadogo87@gmail.com')->send(new UserMail([$request->name]));
        return redirect()->route('index');
    }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function dashboard()
     {
         return view('admin.pages.index', [
            'publications' => Publication::all(),
            'projects' => Projet::all(),
            'documents' => Formulaire::all(),
            'users' => User::all(),
            'blogs' => Post::all(),
            'comments' => Comment::all(),
            'documents' => Formulaire::simplePaginate(8)
        ]);
     }
 
     public function accueil()
     {
         return view('internaut.pages.index', [
             'publications' => Publication::simplePaginate(3),
             'projects' => Projet::simplePaginate(6),
             'documents' => Formulaire::simplePaginate(8)
         ]);
     }

     public function about()
     {
         return view('internaut.pages.about');
     }
 
     public function contact()
     {
         return view('internaut.pages.contact');
     }
 
     public function blog()
     {
         return view('internaut.pages.blog');
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function single_pub($id)
     {
         return view('internaut.pages.single_pub', [
             'finds' =>  Publication::find($id),
             'publications' => Publication::simplePaginate(4),
             'projects' => Projet::simplePaginate(4),
             'comments' => Comment::where('publications_id', '=', $id)->get(),
             'documents' => Formulaire::simplePaginate(8)
         ]);
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
      public function single_projet($id)
      {
          return view('internaut.pages.single_project', [
              'finds' =>  Projet::find($id),
              'publications' => Publication::simplePaginate(4),
              'projects' => Projet::simplePaginate(4),
              'documents' => Formulaire::simplePaginate(8)
          ]);
      }

      /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function single_blog($id)
     {
         return view('internaut.pages.single_blog', [
             'finds' =>  Post::find($id),
             'publications' => Publication::simplePaginate(4),
             'projects' => Projet::simplePaginate(4),
             'comments' => CommentPost::where('posts_id', '=', $id)->get(),
             'documents' => Formulaire::simplePaginate(8)
         ]);
     }

       /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
      public function single_doc($id)
      {
          return view('internaut.pages.single_doc', [
              'finds' =>  Formulaire::find($id),
              'publications' => Publication::simplePaginate(4),
              'projects' => Projet::simplePaginate(4),
              'comments' => CommentPost::where('posts_id', '=', $id)->get(),
              'documents' => Formulaire::simplePaginate(8)
          ]);
      }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function all_pub()
     {
        return view('internaut.pages.pub', [
            'publications' => Publication::all(),
            'projects' => Projet::all(),
            'documents' => Formulaire::simplePaginate(8)
        ]);
     }

     public function all_prog()
     {
        return view('internaut.pages.projet', [
            'publications' => Publication::all(),
            'projects' => Projet::all(),
            'documents' => Formulaire::simplePaginate(8)
        ]);
     }

     public function my_site()
     {
        return view('internaut.pages.my_site', [
            'publications' => Publication::all(),
            'projects' => Projet::all(),
            'documents' => Formulaire::all(),
        ]);
     }

     public function catpub($id)
    {
        return view('internaut.pages.pub_cat', [
            'finds' =>  Categorie::find($id),
            'publications' => Publication::where('categories_id', '=', $id)->get(),
            'documents' => Formulaire::simplePaginate(8)
        ]);
    }

    public function setting()
    {
        return view('admin.pages.setting', [
            'publications' => Publication::all(),
            'documents' => Formulaire::simplePaginate(8)
        ]);
    }
}
