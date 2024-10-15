<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

route::get('/home',[NoteController::class, 'home'])->name('home');

route::get('/notes/view', [NoteController::class, 'index'])->name('note-list');

route::get('/note/create', [NoteController::class, 'create'])->name('note-create');

route::get('/note/view/{note}', [NoteController::class, 'show'])->name('note-show');

route::post('/note/create/store',[NoteController::class, 'store'])->name('note-store');

route::get('/note/view/{note}/edit', [NoteController::class, 'edit'])->name('note-edit');

route::put('/note/view/{note}/edit/update', [NoteController::class, 'update'])->name('note-update');

route::delete('/note/view/{note}/edit/delete', [NoteController::class, 'destroy'])->name('note-delete');

Route::post('/note/view/search', [NoteController::class, 'search'])->name('note-search');
