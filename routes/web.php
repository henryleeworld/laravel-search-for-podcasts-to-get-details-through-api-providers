<?php

use App\Http\Controllers\PodcastController;
use Illuminate\Support\Facades\Route;

Route::get('podcast/search', [PodcastController::class, 'search']);
