<?php

use App\Http\Controllers\RelationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

route::group(['prefix' => '/v1'], function () {

    route::get('/lessons', [RelationController::class, 'ApiLessons']);

});
