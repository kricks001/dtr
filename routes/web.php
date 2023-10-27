<?php

use App\Http\Controllers\AuthController;
use App\Models\Item;
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
Route::post("/items", [ItemController::class, "store"])->middleware("auth");
Route::get("/items/edit/{item}", [ItemController::class, "edit"]);
Route::put("/items/{item}", [ItemController::class, "update"])->middleware("auth");
Route::delete("/items/{item}", [ItemController::class, "destroy"])->middleware("auth");

Route::get("/search", function () {
    $items = Item::search(request("q"))->paginate();
    return view("item.index", ["items"=> $items]);
});

Route::get("/login", [AuthController::class, "login"])->middleware("guest");
Route::post("/login", [AuthController::class, "signin"])->middleware("guest");
Route::get("/signup", [AuthController::class, "signup"])->middleware("guest");
Route::post("/signup", [AuthController::class, "register"])->middleware("guest");

Route::get("/categories");

Route::get("/items/{item:name}", [ItemController::class, "show"]);
