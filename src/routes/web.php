<?php

use Illuminate\Http\Request;


Route::post('upload',[Rais\LaravelImageUpload\Http\Controllers\ImageUploadController::class,'upload']);




