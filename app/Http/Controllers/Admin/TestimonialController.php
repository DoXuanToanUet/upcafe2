<?php

namespace App\Http\Controllers\Admin;

use Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public $testimonial;

    public function __construct() {
        $this->testimonial = new Testimonial();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = $this->testimonial->testimonials();
        return view('admin.main.testimonials', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name'      =>  'required',
            'content'   =>  'required',
        ]);

        if ($validator->fails()) {
            $mesg = $validator->messages();
            return response(json_encode($mesg));
        }

        Testimonial::create([
            'name'      =>  $request->name,
            'content'   =>  $request->content
        ]);

        Session::flash('msg', ['Saved', 'success']);

        return response()->json('success');
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
            'name'      =>  'required',
            'content'   =>  'required',
        ]);

        if ($validator->fails()) {
            $mesg = $validator->messages();
            return response(json_encode($mesg));
        }

        Testimonial::where('id', $request->id)->update([
            'name'      =>  $request->name,
            'content'   =>  $request->content
        ]);

        Session::flash('msg', ['Updated', 'success']);

        return response()->json('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Testimonial::where('id', $id)->delete();

        Session::flash('msg', ['Deleted', 'success']);

        return response()->json('success');
    }
}
