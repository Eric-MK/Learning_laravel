<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    return view('listing', [
      'heading' => 'Latest Listing',
      'listings' => [
        [
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit
            . Aliquam quidem animi, sed delectus eligendi
            temporibus et, fuga error possimus saepe rerum nemo,
            voluptates perspiciatis distinctio! Voluptas
            porro accusantium harum. Dignissimos!'
        ],
        [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit
            . Aliquam quidem animi, sed delectus eligendi
            temporibus et, fuga error possimus saepe rerum nemo,
            voluptates perspiciatis distinctio! Voluptas
            porro accusantium harum. Dignissimos!'
        ]
      ]
    ]);
});

Route::get('/hello', function () {

    return response('<h1>Hello World</h1>', 200)
    ->header('Content-Type', 'text/plain');

});
Route::get('/posts/{id}', function ($id) {
 return response('Post ' . $id);
})->where('id', '[0-9]+');


Route::get('/search', function (Request $request) {

    //dd($request);
    return($request->name . ' '.$request->city);

});

