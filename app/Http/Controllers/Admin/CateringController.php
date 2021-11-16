<?php

namespace App\Http\Controllers\Admin;

use Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Catering;

class CateringController extends Controller
{
    public $catering;

    public function __construct() {
        $this->catering = new Catering();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $seg = $request->segment(3);

        if($seg == 'breakfast'){
            $parent = [
                1   =>  'finger-food',
                2   =>  'buffet',
                3   =>  'setup',
                4   =>  'beverage',
                5   =>  'additional-options'
            ];
            $data = $this->catering->menu('breakfast', $parent);
            return view('admin.catering.breakfast', compact('data'));

        } else if($seg == 'tea'){
            $parent = [
                1   =>  'main-options',
                2   =>  'beverage',
                3   =>  'savoury',
                4   =>  'sweet',
            ];
            $data = $this->catering->menu('tea', $parent);
            return view('admin.catering.tea', compact('data'));

        } else if($seg == 'lunch'){
            $parent = [
                1   =>  'main-options',
                2   =>  'salad',
                3   =>  'sandwich',
                4   =>  'savoury',
                5   =>  'sweet',
            ];
            $data = $this->catering->menu('lunch', $parent);
            return view('admin.catering.lunch', compact('data'));
            
        } else if($seg == 'dinner'){
            $parent = [
                1   =>  'main-options',
                2   =>  'beverage',
                3   =>  'setup',
                4   =>  'carvery',
                5   =>  'hot',
                6   =>  'sea-food',
                7   =>  'salad',
                8   =>  'sweet',
            ];
            $data = $this->catering->menu('dinner', $parent);
            return view('admin.catering.dinner', compact('data'));
        } else if ($seg == 'more') {
            $parent = [
                1   =>  'island',
                2   =>  'island-option-1-setup',
                3   =>  'island-option-2-setup',
                4   =>  'island-option-1-additional-options',
                5   =>  'graze',
                6   =>  'funeral',
                7   =>  'funeral-option-1-setup',
                8   =>  'funeral-option-2-setup',
                9   =>  'funeral-option-3-setup',
                10  =>  'high-tea',
                11  =>  'high-tea-additional-options',
                12  =>  'platters',
                13  =>  'platters-walk-and-fork',
                14  =>  'xmas-themed',
                15  =>  'xmas-themed-finger-food-style-setup',
                16  =>  'xmas-themed-sweet-platter-additional-options',
            ];
            $data = $this->catering->menu('more', $parent);
            return view('admin.catering.more', compact('data'));
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
            'name'    =>  'required',
        ]);

        if ($validator->fails()) {
            $mesg = $validator->messages();
            return response(json_encode($mesg));
        }

        $price = ($request->has('price_on_request') && $request->price_on_request == 1) ? -1 : $request->price;

        Catering::create([
            'name'          =>  $request->name,
            'content'       =>  $request->content,
            'group'         =>  $request->group,
            'price'         =>  $price,
            'grandparent'   =>  $request->grandparent,
            'parent'        =>  $request->parent,
            'vegetarian'    =>  ($request->vegetarian) ? 1 : 0,
            'gluten'        =>  ($request->gluten) ? 1 : 0,
            'vegan'         =>  ($request->vegan) ? 1 : 0,
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
            'name'    =>  'required',
        ]);

        if ($validator->fails()) {
            $mesg = $validator->messages();
            return response(json_encode($mesg));
        }

        $price = ($request->has('price_on_request') && $request->price_on_request == 1) ? -1 : $request->price;

        Catering::where('id', $request->id)->update([
            'name'          =>  $request->name,
            'content'       =>  $request->content,
            'group'         =>  $request->group,
            'price'         =>  $price,
            'grandparent'   =>  $request->grandparent,
            'parent'        =>  $request->parent,
            'vegetarian'    =>  ($request->vegetarian) ? 1 : 0,
            'gluten'        =>  ($request->gluten) ? 1 : 0,
            'vegan'         =>  ($request->vegan) ? 1 : 0,
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
        Catering::where('id', $id)->delete();

        Session::flash('msg', ['Deleted', 'success']);

        return response()->json('success');
    }
}
