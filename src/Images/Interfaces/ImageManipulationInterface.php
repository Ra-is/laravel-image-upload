<?php

namespace Rais\LaravelImageUpload\Images\Interfaces;

interface ImageManipulationInterface
{
    public function imageUpload($imageFile, $subdirectory);
}

