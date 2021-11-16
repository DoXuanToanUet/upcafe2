<?php

namespace App\Http\Controllers\Admin;

use File;
use Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Cafe;
use App\Models\Banner;

class CafeController extends Controller
{
    public $cafe;
    public $banner;

    public function __construct() {
        $this->cafe = new Cafe();
        $this->banner = new Banner();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = $this->cafe->menu();
        return view('admin.cafe.menu', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'file'    =>  'required',
        ]);

        if ($validator->fails()) {
            $mesg = $validator->messages();
            return response(json_encode($mesg));
        }
        
        foreach($request->file as $f){
            $file = $this->banner->singleImage($f, 'cafe');

            Cafe::create([
                'file'  =>  $file,
            ]);
        }

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
        $data = Cafe::where('id', $id)->value('file');

        $file = config('global.public').'/cafe/'.$data;
        
        File::delete($file);

        Cafe::where('id', $id)->delete();

        Session::flash('msg', ['Deleted', 'success']);

        return response()->json('success');
    }
}
