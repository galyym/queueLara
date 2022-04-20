<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Models\Data;
use App\Jobs\DataExport;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [DataController::class, 'index']);

//Route::get('/jobs/{jobs}', function ($jobs){
////    $data = new DataExport([
////        ['N', 'Name', 'Age'],
////        [1, 'Max', 36]
////    ]);
//
//    $data = Data::all();
//
//
//    DataExport::dispatch($data);
//
//
//    return 'done';
//});

Route::get('/jobs/{jobs}', [DataController::class, 'index']);
