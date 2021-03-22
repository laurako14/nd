<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GardenController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('laravelis', function () {
    return 'Labas Laraveli';
});

Route::get('gates/{vaisius}/{id}', [GardenController::class, 'index']);

Route::get('gates/daugyba/{num1}/{num2}', [GardenController::class, 'daugyba']);

Route::get('gates/dalyba/{num1}/{num2}', [GardenController::class, 'dalyba']);

Route::get('gates/suma/{num1}/{num2}', [GardenController::class, 'suma']);

Route::get('gates/atimtis/{num1}/{num2}', [GardenController::class, 'atimtis']);