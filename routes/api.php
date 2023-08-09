<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeletedEmployeeController;
use App\Http\Controllers\DeletedCandidateController;


Route::post('/delete-employee', [DeletedEmployeeController::class, 'storeEmployee']);
Route::post('/delete-condidat', [DeletedCandidateController::class, 'storeCondidate']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
