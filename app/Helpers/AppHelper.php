<?php

namespace App\Helpers;

use App\Models\Site;

class AppHelper
{
    public static function instance(){
        return new AppHelper();
    }

    public function site(){
        $data = Site::first();
        return $data;
    }   
}