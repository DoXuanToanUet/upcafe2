<?php

namespace App\Http\Controllers\Admin;

use File;
use Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Banner;

class BannerController extends Controller
{
    public $banner;

    public function __construct() {
        $this->banner = new Banner();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $seg = $request->segment(2);
        if($seg == 'home-banner'){
            $homeBanner = $this->banner->homeBanner();
            $homeCafe = $this->banner->homeCafe();
            $homeCatering = $this->banner->homeCatering();

            return view('admin.main.banner', compact('homeBanner', 'homeCafe', 'homeCatering'));
        } else if($seg == 'cafe-banner'){
            $homeCafe = $this->banner->cafeBanner();

            return view('admin.cafe.banner', compact('homeCafe'));
        } else if($seg == 'catering-banner'){
            $homeCatering = $this->banner->cateringBanner();

            return view('admin.catering.banner', compact('homeCatering'));
        } else if($seg == 'gallery'){
            $data = $this->banner->gallery();

            return view('admin.main.gallery', compact('data'));
        }

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'image'    =>  'required',
        ]);

        if ($validator->fails()) {
            $mesg = $validator->messages();
            return response(json_encode($mesg));
        }

        $image = $this->banner->singleImage($request->image, 'banner');

        Banner::create([
            'name'  =>  $image,
            'title' =>  $request->title,
            'page'  =>  $request->page
        ]);

        Session::flash('msg', ['Saved', 'success']);

        return response()->json('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $data = Banner::where('id', $id)->value('name');

        $image = config('global.public').'/banner/'.$data;
        
        File::delete($image);

        Banner::where('id', $id)->delete();

        Session::flash('msg', ['Deleted', 'success']);

        return response()->json('success');
    }
}