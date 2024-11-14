<?php

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
Route::get('/check-db', function () {
    try {
        DB::connection()->getPdo();
        return response()->json(['message' => 'Database connection is successful']);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Could not connect to the database', 'error' => $e->getMessage()], 500);
    }
});