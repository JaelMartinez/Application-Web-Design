<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorld;

Route::get('/', [HelloWorld::class, 'index'])->name('hello.index');
Route::get('/create', [HelloWorld::class, 'create'])->name('hello.create');
Route::get('/edit', [HelloWorld::class, 'edit'])->name('hello.edit');

