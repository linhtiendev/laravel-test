<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController; // this is import

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

Route::get('products', [
    ProductsController::class,
    'index' // index function of ProductsController
]);

// parameter
Route::get('products/{id}', [
    ProductsController::class,
    'detail' // detail function of ProductsController
]);

Route::get('about', [
    ProductsController::class,
    'about'
]);

/*
Route::get('/', function () {
    return view('home'); // response a view
    // return env('MY_NAME');
});

/*
Route::get('/users', function () {
    return 'This is the users page'; // response a string
});

Route::get('/foods', function () {
    return ['rice', 'fired chicken', 'burger']; // response a array
});

Route::get('/aboutMe', function () {
    return response()->json([
        'name' => 'Le Linh Tien',
        'age' => 23
    ]); // response a obj
});

// response another request = redirect
Route::get('/something', function () {
    return redirect('/foods'); // redirect to root (ex: redirect to foods page)
});
*/