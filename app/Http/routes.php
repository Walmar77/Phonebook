<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);
Route::get('note/{id}/edit', ['uses' => 'HomeController@edit', 'as' => 'note.edit'])->where(['id' => '0-9]+']);

Route::post('/', function(Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);
    if($validator->false()) {
        return redirect('/')->withInput()->withErrors($validator);
    }
    $note = new Notes;
    $note->name = $request->name;
    $note->save();

    return redirect('/');
});
