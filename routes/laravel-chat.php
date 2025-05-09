<?php

use Dcodegroup\LaravelChat\Http\Controllers\Chat\CreateController;
use Dcodegroup\LaravelChat\Http\Controllers\Chat\ShowController;
use Dcodegroup\LaravelChat\Http\Controllers\HeaderController;
use Dcodegroup\LaravelChat\Http\Controllers\MessagesController;
use Dcodegroup\LaravelChat\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    return 'test';
});

Route::get(config('laravel-chat.route_path').'/header/{chat}', HeaderController::class)
    ->name(config('laravel-chat.route_name').'.header');

Route::get(config('laravel-chat.route_path').'/search/', SearchController::class)
    ->name(config('laravel-chat.route_name').'.search');

Route::post(config('laravel-chat.route_path').'/chat/create', CreateController::class)
    ->name(config('laravel-chat.route_name').'.chat.create');
Route::get(config('laravel-chat.route_path').'/chat/show/{chat}', ShowController::class)
    ->name(config('laravel-chat.route_name').'.chat.show');

Route::get(config('laravel-chat.route_path').'/messages/{message}', [MessagesController::class, 'index'])
    ->name(config('laravel-chat.route_name').'.messages.index');
Route::post(config('laravel-chat.route_path').'/messages/{message}', [MessagesController::class, 'store'])
    ->name(config('laravel-chat.route_name').'.messages.store');
