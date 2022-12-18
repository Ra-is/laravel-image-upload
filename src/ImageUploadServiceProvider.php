<?php
namespace Rais\LaravelImageUpload;

use Illuminate\Support\ServiceProvider;

class ImageUploadServiceProvider extends ServiceProvider
{
    public function boot()
    {
       
        $this->publishes([
            __DIR__.'/config/laravelimageupload.php' => config_path('laravelimageupload.php'),
        ]);
       
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/laravelimageupload.php', 'laravelimageupload'
        );
    }
}