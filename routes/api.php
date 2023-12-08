<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return response()->json(
        [
            'status' => 'Thành công'
        ],
        200
    );
});

Route::get('/get-token', function () {
    $user = User::where('id', 1)->first();
    return response()->json(
        ['token' => $user->createToken("", ['privage:all'])->plainTextToken ]
    );
});
