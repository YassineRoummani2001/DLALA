<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DlalaMailController;
use App\Http\Controllers\EtatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SousCategorieController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('Home.index');
});

//Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Route
Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin');

// Annonces
Route::get('/annonce',[AnnonceController::class ,'index'] )->name('annonce.index')->middleware('auth');
Route::post('/annonce',[AnnonceController::class ,'store'] )->name('annonce.store')->middleware('auth');
Route::get('/annonce/create',[AnnonceController::class ,'create'] )->name('annonce.create')->middleware('auth');
Route::get('/annonce/{id}/show',[HomeController::class ,'show'] )->name('annonce.show')->middleware('auth');
Route::get('/annonce/{id}/share',[HomeController::class ,'share'] )->name('annonce.share')->middleware('auth');
Route::get('/annonce/{id}/cart',[HomeController::class ,'cart'] )->name('annonce.cart')->middleware('auth');

//search
Route::get('/annonce/search', [AnnonceController::class, 'search'])->name('annonce.search')->middleware('auth');
Route::get('/', [AnnonceController::class, 'search'])->name('annonce.search')->middleware('auth');



// Home => user
Route::get('/',[HomeController::class ,'index'] );

// Annonces => Admin
Route::get('/annonce_admin',[AnnonceController::class ,'admin_index'] )->name('annonce_admin.index')->middleware('auth');
Route::delete('/annonce_admin',[AnnonceController::class ,'destroy'] )->name('annonce_admin.destroy')->middleware('auth');
Route::get('/annonce_admin/{id}/show_ad',[AnnonceController::class ,'show_ad'] )->name('annonce_admin.show_ad')->middleware('auth');

// Categories => Admin
Route::get('/categorie_admin',[CategorieController::class ,'admin_index'] )->name('categorie_admin.index')->middleware('auth');
Route::get('/categorie_admin/{id}/edit',[CategorieController::class ,'edit'] )->name('categorie_admin.edit')->middleware('auth');
Route::put('/categorie_admin',[CategorieController::class ,'update'] )->name('categorie_admin.update')->middleware('auth');
Route::delete('/categorie_admin',[CategorieController::class ,'destroy'] )->name('categorie_admin.destroy')->middleware('auth');
Route::post('/categorie_admin',[CategorieController::class ,'store'] )->name('categorie_admin.store')->middleware('auth');
Route::get('/categorie_admin/create',[CategorieController::class ,'create'] )->name('categorie_admin.create')->middleware('auth');
Route::get('/categorie_admin/{id}/show',[CategorieController::class ,'show'] )->name('categorie_admin.show')->middleware('auth');

// Sous Categories => Admin
Route::get('/sous_categorie_admin',[SousCategorieController::class ,'admin_index'] )->name('sous_categorie_admin.index')->middleware('auth');
Route::get('/sous_categorie_admin/{id}/edit',[SousCategorieController::class ,'edit'] )->name('sous_categorie_admin.edit')->middleware('auth');
Route::post('/sous_categorie_admin',[SousCategorieController::class ,'update'] )->name('sous_categorie_admin.update')->middleware('auth');
Route::delete('/sous_categorie_admin',[SousCategorieController::class ,'destroy'] )->name('sous_categorie_admin.destroy')->middleware('auth');
Route::post('/sous_categorie_admin',[SousCategorieController::class ,'store'] )->name('sous_categorie_admin.store')->middleware('auth');
Route::get('/sous_categorie_admin/create',[SousCategorieController::class ,'create'] )->name('sous_categorie_admin.create')->middleware('auth');
Route::get('/sous_categorie_admin/{id}/show',[SousCategorieController::class ,'show'] )->name('sous_categorie_admin.show')->middleware('auth');

// Etat => Admin
Route::get('/etat_admin',[EtatController::class ,'admin_index'] )->name('etat_admin.index')->middleware('auth');
Route::get('/etat_admin/{id}/edit',[EtatController::class ,'edit'] )->name('etat_admin.edit')->middleware('auth');
Route::post('/etat_admin',[EtatController::class ,'update'] )->name('etat_admin.update')->middleware('auth');
Route::delete('/etat_admin',[EtatController::class ,'destroy'] )->name('etat_admin.destroy')->middleware('auth');
Route::post('/etat_admin',[EtatController::class ,'store'] )->name('etat_admin.store')->middleware('auth');
Route::get('/etat_admin/create',[EtatController::class ,'create'] )->name('etat_admin.create')->middleware('auth');
Route::get('/etat_admin/{id}/show',[EtatController::class ,'show'] )->name('etat_admin.show')->middleware('auth');

// Contact
Route::get('/contact',[ContactController::class ,'index'] )->name('contact.index')->middleware('auth');
Route::get('/contact/{id}/show',[ContactController::class ,'show'] )->name('contact.show')->middleware('auth');

// Contact => Admin
Route::post('/contact/create',[ContactController::class ,'store'] )->name('contact.store')->middleware('auth');
Route::get('/contact/create',[ContactController::class ,'create'] )->name('contact.create')->middleware('auth');



// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Profile => Admin
Route::get('/profile_admin',[ProfileController::class ,'admin_index'] )->name('profile_admin.index')->middleware('auth');

// Admin
Route::middleware('auth')->group(function () {
    Route::get('/admin_profile', [ProfileController::class, 'admin_edit'])->name('admin_profile.edit');
    Route::patch('/admin_profile', [ProfileController::class, 'admin_update'])->name('admin_profile.update');
    Route::delete('/admin_profile', [ProfileController::class, 'admin_destroy'])->name('admin_profile.destroy');
});

require __DIR__.'/auth.php';
