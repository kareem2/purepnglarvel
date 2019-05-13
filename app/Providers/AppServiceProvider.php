<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Validator::extend('is_supported_type', function ($attribute, $value, $parameters, $validator) {
            $decoded_image = base64_decode($value);
            $file = finfo_open();
            $image_type = finfo_buffer($file, $decoded_image, FILEINFO_MIME_TYPE);
            //dd($image_type);
            $image_type = explode('/', $image_type);
            $image_type = $image_type[1];

            return in_array($image_type, config('custom.supported_types'));
        });        
    }
}
