<?php

namespace Rais\LaravelImageUpload\Images;

use Rais\LaravelImageUpload\Images\Interfaces\ImageManipulationInterface;
use Rais\LaravelImageUpload\Images\Repositories\ImageS3Repository;
use Rais\LaravelImageUpload\Images\Repositories\LocalImageRepository;
use Exception;

class ImageManager
{
    protected $imageFile;
    protected $subdirectory;

    public function uploadImageService(ImageManipulationInterface $imageManipulation)
    {
        return $imageManipulation->imageUpload($this->imageFile, $this->subdirectory);
    }

    public function uploadImage($imageFile, $subdirectory, $driver = 's3')
    {
        $this->imageFile = $imageFile;
        $this->subdirectory = $subdirectory;
        if ($driver == 's3') {
            return $this->uploadImageService(new ImageS3Repository());
        } elseif ($driver == 'local') {
            return $this->uploadImageService(new LocalImageRepository());
        } else {
            throw new Exception('Undefine Image driver');
        }
    }
}

