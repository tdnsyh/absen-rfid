<?php

use App\Http\Controllers\Web\WebHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebHomeController::class, 'index']);
