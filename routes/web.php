<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

/*
-------------------------------------
| CRUD
-----------------------------
*/

Route::get('users/create/{name}/{email}', CreateUserController::class);
Route::get('users', ListAllUsersController::class);
Route::get('users/update/{id}/{newName}/{newEmail}', UpdateUserController::class);
Route::get('users/delete/{id}', DeleteUserController::class); 

/*
-------------------------------------
| One-to-one
-----------------------------
*/

Route::get('users/document',ListAllIdentityDocuments::class);
Route::get('users/document/register/{id}/{code}',RegisterUserDocument::class);
Route::get('users/document/update/{id}/{newCode}',UpdateIdentityDocument::class);