<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Models\products;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', [PageController::class, 'hello']);

Route::get('/view1', [PageController::class, 'showView1']);

Route::get('/view2', [PageController::class, 'showView2']);

Route::get('/products', [PageController::class, 'showProducts']);