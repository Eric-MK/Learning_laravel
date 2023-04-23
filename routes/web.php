<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing; /* use model Listing */


//All listing
Route::get('/', function () {
    return view('listing', [
      'heading' => 'Latest Listing',
      'listings' => Listing::all()//access the static function of the model
    ]);
});

Route::get('/listings/{id}', function ($id) {

    return view('list', [
        'listing' => Listing::find($id)
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

