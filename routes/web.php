<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImpressieController;


Route::get('/', function () {
    return view('home');
});

Route::get('/UserPage', function () {
    return view('UserPage');
})->middleware('auth', 'is_admin:admin');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('impressie', function () {
    return view('impressie');
});

Route::get('menu', [App\Http\Controllers\MenuController::class, 'index']);

// deze route gaat naar de controller daarna naar de functie index en daar in staat dat die alles moet displayen in menu.blade.php

Route::get('overons', function () {
    return view('overons');
});

Route::get('login', function () {
    return view('login');
});

//Route::get('list', [App\Http\Controllers\MenuController::class, 'list']);
// hij zoekt naar app/controllers en dan gaat die naar menu menucontroller class en in die class zit een functie list zo weet die waar die moet zijn


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/dashboard/menu',

    /// controller-action die $gerechten vult
    // return view('admin.menu');
    //de regel hieronder is hetzelfe als regel 36
    [App\Http\Controllers\MenuController::class, 'adminindex']
)->middleware(['auth', 'verified'])->name('adminmenu');

Route::get('/dashboard/overons', function () {
    return view('admin.overons');
})->middleware(['auth', 'is_admin:admin'])->name('overons');

// middleware auth zorgt ervoor dat je er alleen in kan als je geverified bent


// crud
Route::get('/dashboard/create', 
[App\Http\Controllers\CrudController::class, 'create']
)->middleware(['auth', 'verified'])->name('admincreate');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/impressie', [ImpressieController::class, 'show']);



require __DIR__.'/auth.php';


