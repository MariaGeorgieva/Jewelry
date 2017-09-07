<?php

Route::get('/', function () {
    return view('layouts.master');
})->name('home');

Route::group(['middleware' => ['admin']], function () {

    Route::get('admin', 'AdminController@create')->name('dashboard');
    Route::get('/dashboard', 'AdminController@showUsers');

    Route::get('/upload', 'ImageController@create');
    Route::get('/upload','PromotionsController@SelectSectionAndGroups');
    Route::post('images', 'ImageController@upload');
    Route::get('/show', 'ImageController@show');
    Route::get('{image}/edit', 'ImageController@edit');
    Route::patch('{image}', 'ImageController@update');
    Route::get('{image}/delete', 'ImageController@delete');
    Route::delete('{image}', 'ImageController@destroy');


    Route::get('/groupsCreate','GroupController@groupsShow');
    Route::post('/groupsCreate','GroupController@groupsCreate');
    Route::get('/groupsCreate/{group}/editGroup', 'GroupController@editGroup');
    Route::patch('/groupsCreate/{group}', 'GroupController@updateGroup');
    Route::get('/groupsCreate/{group}/deleteGroup', 'GroupController@deleteGroup');
    Route::delete('/groupsCreate/{group}', 'GroupController@destroyGroup');

    Route::get('/sectionCreate','PromotionsController@sectionShow');
    Route::post('/sectionCreate','PromotionsController@sectionCreate');
    Route::get('/sectionCreate/{section}/editSection', 'PromotionsController@editSection');
    Route::patch('/sectionCreate/{section}', 'PromotionsController@updateSection');
    Route::get('/sectionCreate/{section}/deleteSection', 'PromotionsController@deleteSection');
    Route::delete('/sectionCreate/{section}', 'PromotionsController@destroySection');

});
//display images
Route::get('storage/{filename}', function ($filename) {
    $path = storage_path('app/images/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
});

Route::get('promo', 'PromotionsController@create');
Route::get('promo', 'PromotionsController@show');

Route::get('/register', 'RegistrationController@create')->name('register');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy')->name('logout');;