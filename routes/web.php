<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/* Route::get('/home', function () {
    return "Hello world";
});

Route::get('/welcome', function () {
    return view("welcome");
}); */




/* Route::get('/user/create', function () {
    return '
        <form action="/user/create" method="POST">
            '.csrf_field().'
            <label for="name">Nom de l\'utilisateur :</label>
            <input type="text" id="name" name="name" required>
            <button type="submit">Ajouter l\'utilisateur</button>
        </form>
    ';
}); */

/* Route::post('/user/create', function (\Illuminate\Http\Request $request) {
$name = $request->input('name'); // Récupération de la valeur saisie
$response = '<h1>Ajout Utilisateur</h1>';
$response .= '<p>Utilisateur "' . htmlspecialchars($name) . '" ajouté avec succès</p>';
return $response;
}); */


/* //route parametrer
Route::get('/saluer/{nom}', function ($nom) {
    $reponse = 'Bonjour ' . $nom ;
    return $reponse;
    });
 */

/*     //ajout de contrainte au niveau des route
    Route::get('/users/{id}', function ($id) {
        $reponse = 'Utilisateur N°' . $id;
        return $reponse;
        })->where('id', '[0-9]+'); */




         //BLOG
        Route::get('/', function () {
            return view("index");
        });

        Route::get('view', [PostController::class, 'index'])->name('posts.index');
        Route::get('show/{post}', [PostController::class, 'show'])->name('posts.show');

        Route::get('navbar', function () {
            return view("navbar");
        });

        Route::get('search', [PostController::class, 'search'])->name('posts.search');



        // Route pour stocker un nouvel article
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');


// Route pour afficher le formulaire d'édition d'un article
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');


// Route pour mettre à jour un article
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');


// Route pour supprimer un article
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

