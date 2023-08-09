<?php

use Carbon\Carbon;
use App\Models\Deleted_Condidat;
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
    $fiveMinutesAgo = Carbon::now()->subMinutes(5);
    Deleted_Condidat::whereDate('created_at', '<', $fiveMinutesAgo)->delete();
});
