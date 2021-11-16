<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Intervention\Image\ImageManagerStatic as Image;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banner';

    protected $fillable = ['name', 'title', 'page'];

    public function homeBanner(){
        $data = Banner::where('page', 1)->get();
        return $data;
    }

    public function homeCafe(){
        $data = Banner::where('page', 2)->get();
        return $data;
    }

    public function homeCatering(){
        $data = Banner::where('page', 3)->get();
        return $data;
    }

    public function cafeBanner(){
        $data = Banner::where('page', 4)->get();
        return $data;
    }

    public function cateringBanner(){
        $data = Banner::where('page', 5)->get();
        return $data;
    }

    public function gallery(){
        $data = Banner::where('page', 6)->get();
        return $data;
    }

    //using for image upload and cafe menu
    public function singleImage($img, $folder){
        $extension 	= $img->extension();
        $image_name = time().'-'.rand(1,999).'.'.$extension;

        $destination = config('global.public').'/'.$folder.'/'.$image_name;

        $image_resize = Image::make($img->getRealPath());

        $image_resize->save($destination);

        return $image_name;
    }
}
