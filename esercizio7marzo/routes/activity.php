<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function() {
  return view('activity.index');  
});

Route::get('/{id}', function(int $id) {
  return view('activity.single', ['id' => $id]);  
})->whereNumber('id');


Route::get('/create', function() {
  return view('activity.create');
});

Route::get('/edit/{id}', function(int $id) {
  return view('activity.edit', ['id' => $id]);
})->whereNumber('id');