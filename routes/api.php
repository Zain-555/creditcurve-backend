<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\RegisterEmail;
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/sendemail', function (Request $request) {
    $userDetails = [
        'username' => $request->username,
        'email' =>$request->email,
    ];
    Mail::to($request->email)->send(new RegisterEmail($userDetails));
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
