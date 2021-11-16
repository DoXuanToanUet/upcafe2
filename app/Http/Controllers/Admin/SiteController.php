<?php

namespace App\Http\Controllers\Admin;

use File;
use Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Site;
use App\Models\Banner;

class SiteController extends Controller
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
    public function index(){
        return view('admin.site');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'contact'   =>  'required',
            'email'     =>  'required',
            'address'   =>  'required'
        ]);

        if ($validator->fails()) {
            $mesg = $validator->messages();
            return response(json_encode($mesg));
        }

        if($request->logo){
            $data = Site::where('id', 1)->value('logo');

            $image = config('global.public').'/logo/'.$data;
            
            File::delete($image);

            $logo = $this->banner->singleImage($request->logo, 'logo');

            Site::where('id', 1)->update([
                'contact'   =>  $request->contact,
                'email'     =>  $request->email,
                'address'   =>  $request->address,
                'shortinfo'   =>  $request->shortinfo,
                'facebook'  =>  $request->facebook,
                'instagram' =>  $request->instagram,
                'logo'      =>  $logo
            ]);
        } else {
            Site::where('id', 1)->update([
                'contact'   =>  $request->contact,
                'email'     =>  $request->email,
                'address'   =>  $request->address,
                'shortinfo'   =>  $request->shortinfo,
                'facebook'  =>  $request->facebook,
                'instagram' =>  $request->instagram
            ]);
        }

        Session::flash('msg', ['Updated', 'success']);

        return response()->json('success');
    }
}
