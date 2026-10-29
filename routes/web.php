<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/test', function () {
    return 'hello world';
});

Route::post('/', function (Request $request) {
    if ($request->isJson()) {
        return $request->input('name');
    }

    return $request->input('role');
});

Route::get('/person/{id}', function (Request $request, int $id) {
    return view('person', ['data' => $request->all(), 'id' => $id]);
});
