<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contact\ContactControllerUI;
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
});

// Route for View
Route::get('/', [ContactControllerUI::class, 'viewform']);

// Route for Getting the Data (changed to make it the landing page)
Route::get('/', [ContactControllerUI::class, 'index']);

// Route for AddContact
Route::get('/addContact', [ContactControllerUI::class, 'contactform']);

// Route for Saving Data
Route::post('/add_data', [ContactControllerUI::class, 'contactSave']);

// Route to the Edit View
Route::get('click_edit/{id}', [ContactControllerUI::class, 'contactEdit']);

// Route to Update Data
Route::post('/update/{id}', [ContactControllerUI::class, 'contactUpdate']);

// Route to Delete Data
Route::get('/click_delete/{id}', [ContactControllerUI::class, 'contactDelete']);