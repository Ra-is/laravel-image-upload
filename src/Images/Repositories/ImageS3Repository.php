<?php

namespace Rais\LaravelImageUpload\Images\Repositories;
use Illuminate\Support\Facades\Storage;
use Rais\LaravelImageUpload\Images\Interfaces\ImageManipulationInterface;

class ImageS3Repository implements ImageManipulationInterface
{

    public function imageUpload($imageFile, $subdirectory)
    {
        $name = time() . $imageFile->getClientOriginalName();
        $filePath = "images/$subdirectory/" . $name;
        Storage::disk('s3')->put($filePath, file_get_contents($imageFile));
        $image_path = env('AWS_SAVED_URL') . $filePath;
        return $image_path;
    }
}

