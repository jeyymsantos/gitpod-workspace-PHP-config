<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contact\ContactControllerAPI;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get All Data
Route::get('contact', [ContactControllerAPI::class, 'contact']);

// Get Data by ID
Route::get('contact/{id}', [ContactControllerAPI::class, 'contactByID']);

//POST Data
Route::post('contact', [ContactControllerAPI::class, 'contactSave']);

//PUT Data
Route::put('contact/{contact}', [ContactControllerAPI::class, 'contactUpdate']);

//DELETE Data
Route::delete('contact/{contact}', [ContactControllerAPI::class, 'contactDelete']);