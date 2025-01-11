<?php

use App\Http\Controllers\admin\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.pages.products.index');
// });

Route::get('/',[ProductController::class, 'index']);
