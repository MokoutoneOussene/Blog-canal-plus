<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentPostController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\FillialeController;
use App\Http\Controllers\FormulaireController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::middleware('auth')->group(function() {
    
// });

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('Register_users', [PageController::class, 'register'])->name('register');

Route::get('Accueil', [PageController::class, 'accueil'])->name('accueil');

Route::get('Dashboard', [PageController::class, 'dashboard'])->name('dash');

Route::get('a-propos-de-nous', [PageController::class, 'about'])->name('about');

Route::get('nous-contacter', [PageController::class, 'contact'])->name('contact');

Route::post('connexion', [AuthController::class, 'login'])->name('login');

Route::post('deconnexion', [AuthController::class, 'logout'])->name('logout');

Route::get('all_publications', [PageController::class, 'all_pub'])->name('pubs');

Route::get('all_projects', [PageController::class, 'all_prog'])->name('all_prog');

Route::get('my_private_space', [PageController::class, 'my_site'])->name('my_site');

Route::get('all_blogs', [PageController::class, 'blog'])->name('blog');

Route::get('categorie_publication/{id}', [PageController::class, 'catpub']);

Route::post('add_user', [PageController::class, 'add'])->name('add_user');

// la partie backend
Route::resource('gestion_publication', PublicationController::class);
Route::get('destroyPub/{id}', [PublicationController::class, 'destroy']);
Route::get('single_publication/{id}', [PageController::class, 'single_pub']);

Route::resource('gestion_projet', ProjetController::class);
Route::get('destroyProjet/{id}', [ProjetController::class, 'destroy']);
Route::get('single_projet/{id}', [PageController::class, 'single_projet']);

Route::resource('gestion_comment', CommentController::class);

Route::resource('gestion_post', PostController::class);
Route::get('single_blog/{id}', [PageController::class, 'single_blog']);

Route::resource('gestion_postcomment', CommentPostController::class);

Route::resource('gestion_user', UserController::class);
Route::get('destroyUser/{id}', [UserController::class, 'destroy']);

Route::resource('gestion_document', FormulaireController::class);
Route::get('destroyDocument/{id}', [FormulaireController::class, 'destroy']);
Route::get('single_document/{id}', [PageController::class, 'single_doc']);

Route::get('parametters', [PageController::class, 'setting'])->name('setting');

Route::resource('gestion_service', ServiceController::class);

Route::resource('gestion_direction', DirectionController::class);

Route::resource('gestion_filliale', FillialeController::class);

Route::resource('gestion_categorie', CategorieController::class);

Route::get("/link", function () {
    $targetFolder = storage_path("app/public");
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});
