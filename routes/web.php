<?php

use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

Route::get('/', function ()
{
  return Inertia::render('IndexPage');
})->name('index');

require __DIR__ . '/settings.php';
