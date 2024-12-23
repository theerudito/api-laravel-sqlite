<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CharacterController;

Route::prefix('v1')->group(function () {
   
    Route::resource('characters', CharacterController::class);
});
