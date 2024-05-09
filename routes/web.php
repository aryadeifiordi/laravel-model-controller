<?php

use App\Http\Controllers\Guests\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);
