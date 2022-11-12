<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BarangController::class, 'getAllBarang']);

Route::get('/about', function () {
    $data = [
        'app-name' => 'Arcari',
        'description' => 'Aplikasi yang membantu mencari barangmu yang hilang.'
    ];
    return view('about', ['data' => $data,'title' => 'About Us']);
});