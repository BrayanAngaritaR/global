<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/locale/{locale}', function ($locale) {
    //Obtener la lista de idiomas disponibles
    $available_locales = config('app.available_locales');

    //Verificar si el idioma que quiero establecer, está en la lista
    if(isset($locale) && in_array($locale, $available_locales)){
        app()->setLocale($locale);
        session()->put('locale', $locale);
    } else {
        //Mostrar un mensaje en caso de que no exista el idioma
        return "Lo sentimos, ese idioma no está disponible";
    }

    //Realizar una acción cuando el usuario cambie el idioma
    return redirect('/register');
})->name('lang');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
