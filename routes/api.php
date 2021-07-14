<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Produit;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/produit', function () {
    return Produit::all();
});

Route::post('/produit', function(Request $request) {
 return Produit::create($request->all());
});

Route::delete('/produit/{id}', function ($id) {
    $produit = Produit::find($id);
    $produit->delete();
    return $produit;
});