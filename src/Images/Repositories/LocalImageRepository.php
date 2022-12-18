<?php

namespace Rais\LaravelImageUpload\Images\Repositories;

use Rais\LaravelImageUpload\Images\Interfaces\ImageManipulationInterface;

class LocalImageRepository implements ImageManipulationInterface
{

    public function imageUpload($imageFile,$subdirectory)
    {
        $imageName = time().'.'.$imageFile->getClientOriginalExtension();
        $imageFile->move(public_path("/images/$subdirectory"), $imageName);
        $image_path = env('APP_URL')."public/images/$subdirectory/$imageName";
        return $image_path;
    }
}

