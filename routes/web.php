<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home-page');
});

use App\Http\Controllers\AuthController;
    route::get('/home-page',[AuthController::class,'home'])->name('home-page');
    Route::get('/register-form', [AuthController::class, 'registerForm'])->name('register-form');
    Route::post('/register', [AuthController::class, 'register'])->name('register-post');
    Route::get('/login-form', [AuthController::class, 'loginForm'])->name('login-form');
    Route::post('/login', [AuthController::class, 'login'])->name('login-post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout-post');

    use App\Http\Controllers\UserController;
    use App\Http\Controllers\NoteController;
    use App\Http\Controllers\PageController;
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

        // route::resource('user',[UserController::class])->except(['createUser','showNote','editNote','updateNote','destroyNote']);

        route::get('/user/show/{id}',[UserController::class, 'showUser'])->name('user.show');
        route::get('/user/edit/{id}',[UserController::class,'editUser'])->name('user.edit');
        Route::put('/user/update/{user}', [UserController::class, 'updateUser'])->name('user.update');

    
        // Resourceful route for notes
        // Route::resource('notes', NoteController::class)->except(['createNote', 'showNote', 'editNote', 'updateNote', 'destroyNote']); // If you don't want all routes
        // Specific routes for notes if not using resourceful routing
        // Route::get('/notes/index', [NoteController::class, 'indexNote'])->name('notes.index');

        Route::get('/notes/create', [NoteController::class, 'createNote'])->name('notes.create');
        Route::post('/notes/store', [NoteController::class, 'storeNote'])->name('notes.store');
        Route::get('/notes/{note}', [NoteController::class, 'showNote'])->name('notes.show'); // Show a specific note
        Route::get('/notes/{note}/edit', [NoteController::class, 'editNote'])->name('notes.edit'); // Edit a specific note
        Route::put('/notes/{note}', [NoteController::class, 'updateNote'])->name('notes.update'); // Update a specific note
        Route::delete('/notes/{note}', [NoteController::class, 'destroyNote'])->name('notes.destroy'); // Delete a specific note
    });

    