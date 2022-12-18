<?php

namespace Rais\LaravelImageUpload\Http\Controllers;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Rais\LaravelImageUpload\Images\ImageManager;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
       try{
        return resolve(ImageManager::class)->uploadImage($request->file('image'), 'TestFolder');
       }catch(Exception $ex)
       {
        return $ex->getMessage();
       }
    }
}

