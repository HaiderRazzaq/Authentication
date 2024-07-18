<?php

use App\Http\Controllers\LessonApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

route::group(['prefix' => '/v1'], function () {

    route::get('/lessons', [LessonApiController::class, 'index']);
    route::get('/lessons/{id}', [LessonApiController::class, 'show']);
    route::Post('/lessons', [LessonApiController::class, 'store']);
    route::match(['put', 'patch'], '/lessions/{id}', [LessonApiController::class, 'update']);
    route::delete('/lessons/{id}', [LessonApiController::class, 'destroy']);

});
