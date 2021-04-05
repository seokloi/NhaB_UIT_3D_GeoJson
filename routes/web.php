<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('help', function () {
    return view('helper');
})->name('helper');

Route::prefix('body')->group(function(){
    Route::get('/', 'BodyController@index')->name('body.index');

    Route::get('create', 'BodyController@create')->name('body.create');
    Route::post('store', 'BodyController@store')->name('body.store');

    Route::get('edit/{id}', 'BodyController@edit')->name('body.edit');
    Route::post('{id}', 'BodyController@update')->name('body.update');

    Route::get('delete/{id}', 'BodyController@delete')->name('body.delete');
});

Route::prefix('face')->group(function(){
    Route::get('/', 'FaceController@index')->name('face.index');

    Route::get('create', 'FaceController@create')->name('face.create');
    Route::post('store', 'FaceController@store')->name('face.store');

//    Route::get('edit/{id}', 'FaceController@edit')->name('face.edit');
//    Route::post('{id}', 'FaceController@update')->name('face.update');

    Route::get('delete/{id}', 'FaceController@delete')->name('face.delete');
});

Route::prefix('floor')->group(function(){
    Route::get('/', 'FloorController@index')->name('floor.index');

    Route::get('create', 'FloorController@create')->name('floor.create');
    Route::post('store', 'FloorController@store')->name('floor.store');

    Route::get('edit/{id}', 'FloorController@edit')->name('floor.edit');
    Route::post('{id}', 'FloorController@update')->name('floor.update');

    Route::get('delete/{id}', 'FloorController@delete')->name('floor.delete');
});

Route::prefix('innerface')->group(function(){
    Route::get('/', 'InnerFaceController@index')->name('innerface.index');

    Route::get('create', 'InnerFaceController@create')->name('innerface.create');
    Route::post('store', 'InnerFaceController@store')->name('innerface.store');

//    Route::get('edit/{id}', 'InnerFaceController@edit')->name('innerface.edit');
//    Route::post('{id}', 'InnerFaceController@update')->name('innerface.update');

    Route::get('delete/{id}', 'InnerFaceController@delete')->name('innerface.delete');
});

Route::prefix('line')->group(function(){
    Route::get('/', 'LineController@index')->name('line.index');

    Route::get('create', 'LineController@create')->name('line.create');
    Route::post('store', 'LineController@store')->name('line.store');

//    Route::get('edit/{id}', 'LineController@edit')->name('line.edit');
//    Route::post('{id}', 'LineController@update')->name('line.update');

    Route::get('delete/{id}', 'LineController@delete')->name('line.delete');
});

Route::prefix('node')->group(function(){
    Route::get('/', 'NodeController@index')->name('node.index');

    Route::get('create', 'NodeController@create')->name('node.create');
    Route::post('store', 'NodeController@store')->name('node.store');

    Route::get('edit/{id}', 'NodeController@edit')->name('node.edit');
    Route::post('{id}', 'NodeController@update')->name('node.update');

    Route::get('delete/{id}', 'NodeController@delete')->name('node.delete');
});

Route::prefix('point')->group(function(){
    Route::get('/', 'PointController@index')->name('point.index');

    Route::get('create', 'PointController@create')->name('point.create');
    Route::post('store', 'PointController@store')->name('point.store');

    Route::get('edit/{id}', 'PointController@edit')->name('point.edit');
    Route::post('{id}', 'PointController@update')->name('point.update');

    Route::get('delete/{id}', 'PointController@delete')->name('point.delete');
});

Route::prefix('surface')->group(function(){
    Route::get('/', 'SurfaceController@index')->name('surface.index');

    Route::get('create', 'SurfaceController@create')->name('surface.create');
    Route::post('store', 'SurfaceController@store')->name('surface.store');

    Route::get('edit/{id}', 'SurfaceController@edit')->name('surface.edit');
    Route::post('{id}', 'SurfaceController@update')->name('surface.update');

    Route::get('delete/{id}', 'SurfaceController@delete')->name('surface.delete');
});

Route::get('custom-point', 'LazyController@point');
Route::get('custom-node', 'LazyController@node');
Route::get('custom-window', 'LazyController@window');
Route::get('stair', 'LazyController@stair');


Route::get('export', 'LazyController@export');
Route::get('export1', 'LazyController@export1');
Route::get('export2', 'LazyController@export2');

Route::get('exportfront', 'LazyController@front');
Route::get('exportfront1', 'LazyController@front1');

Route::get('exportfloor', 'LazyController@floor');
Route::get('exporttop', 'LazyController@top');
Route::get('exportstair', 'LazyController@exportstair');


