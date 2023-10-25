<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view("/", "index");
Route::get('/items', [ItemController::class, "index"]);
Route::get("/items/create", [ItemController::class, "create"]);
Route::post("/items", [ItemController::class, "store"]);
Route::get("/items/edit/{item}", [ItemController::class, "edit"]);
Route::put("/items/{item}", [ItemController::class, "update"]);
Route::delete("/items/{item}", [ItemController::class, "destroy"]);

Route::get("/login", [AuthController::class, "login"]);
Route::post("/login", [AuthController::class, "signin"]);
Route::get("/signup", [AuthController::class, "signup"]);
Route::post("/signup", [AuthController::class, "register"]);

Route::get("/categories");

Route::get("/items/{item:name}", [ItemController::class, "show"]);
