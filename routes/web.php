<?php

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

Route::get('/home', [homeController::class,"home"])->name("home");
Route::get("/login",[LoginController::class,"login"])->name("login");
Route::post("/logout", [LoginController::class,"logout"])->name("logout");
Route::post("/login", [LoginController::class,"checkLogin"]);

Route::get('/signup',[SignupController::class,"index"])->name('signup');
Route::post('/signup', [SignupController::class,"create"]);
Route::get('/signup/email/{query}', [SignupController::class,"checkEmail"])->name("email");
Route::get("/signup/cf/{q}",[SignupController::class,"checkUsername"])->name("username");

Route::get('/api/pattini',[apiController::class,"stampaPattini"])->name('pattini');
Route::get('/pattini', [pattiniController::class,"index"])->name("pattini2");
Route::get('/api/Persona/{cf}',[apiController::class,"stampaAbbonamento"])->name('persona');
Route::get('/api/Abbonamento/{cf}',[apiController::class,"stampa"])->name('abbonamento');
Route::get('/abbonamento',  [infoController::class,"index"])->name('abbonamento2');


Route::get('/api/MHW3',[apiController::class,"randomUser"])->name('randomUser');
Route::get('/api/abbonamento/{cf}/{durataAbb}',[apiController::class,"aggiornaAbbonamento"])->name('aggAbbonamento');
Route::get('/pattini/preferiti/{taglia}/{modello}',[apiController::class,"aggiungiPreferiti"])->name("preferiti1");
Route::get('/MHW3',[randomUserController::class,'index'])->name('MHW3');
Route::get('/MHW5',[chiSiamoController::class,'index'])->name('MHW5');