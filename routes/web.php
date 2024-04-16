<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;



Route::redirect('/', '/books');

Route::get('/books', 'App\Http\Controllers\BookController@index')->name('books.index');
