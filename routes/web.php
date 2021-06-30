<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produit;
use App\Http\Controllers\ProduitController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contacts', function () {
    return view('contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('somme/{nombre1}/{nombre2}', function ($nombre1, $nombre2) {
    dd($nombre1+$nombre2);
});

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     */
Route::get('prod/{produit}/{param2}', function (Produit $produit, $param2) {
    dd($produit);
});

Route::resource('produit', ProduitController::class);


/**
 * Implementer le crud de Boutique avec les champs nom, adresse, telephone et statut
 * nom : boligatoire, unique
 * telephone: unique
 * statut: obligatoire
 * 1.Générer les migrations
 * 2. Générer le CRUD é le modèle
 * 3. Générer les pages avec bootstrap
 * 4. completer le CRUD de produit
 * 5. Gérer la création de l'utilisateur avec le cryptage du mot de passe
 * 6. Gérer le login (le login form apparait si le user n'est pas authentifié et le menu apparait si le user est authentifié)
 *  */
