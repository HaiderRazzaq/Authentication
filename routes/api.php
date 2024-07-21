<?php

use App\Http\Controllers\LessonApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

route::group(['prefix' => '/v1'], function () {

    route::get('/lessons', [LessonApiController::class, 'index']);
    route::put( '/lessons/{id}', [LessonApiController::class, 'update']);
    route::get('/lessons/{id}', [LessonApiController::class, 'show']);
    route::get('/lessons/{id}/tags', [LessonApiController::class, 'tags']);
    route::Post('/lessons', [LessonApiController::class, 'store']);
    route::delete('/lessons/{id}', [LessonApiController::class, 'destroy']);

});

Route::prefix('users')->group(function () {
route::get('/',[]);
});
