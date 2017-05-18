<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Image Driver
    |--------------------------------------------------------------------------
    |
    | Intervention Image supports "GD Library" and "Imagick" to process images
    | internally. You may choose one of them according to your PHP
    | configuration. By default PHP's "GD Library" implementation is used.
    |
    | Supported: "gd", "imagick"
    |
    */

    'driver' => 'gd',


    /*
    |--------------------------------------------------------------------------
    | Avatar configurations
    |--------------------------------------------------------------------------
    | 
    | 'path' => "image/avatar/original/"
    | 'size' => [width, height],
    | 'size' => ['250', '250'],
    |
    */

    'profile' => [
        'original' => [
            'path' => "uploads/photos/",
            ],
        'md' => [
            'size' => ['200', '200'],
            'path' => "uploads/photos/md/",
            ],
        'sm' => [
            'size' => ['50', '50'],
            'path' => "uploads/photos/sm/",
            ],
    ],

);
