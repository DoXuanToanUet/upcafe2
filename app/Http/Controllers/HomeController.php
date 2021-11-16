<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use Mail;
use Session;

use Illuminate\Http\Request;

use App\Mail\OrderEmail;
use App\Mail\ContactMail;

use App\Models\Banner;
use App\Models\Testimonial;
use App\Models\Cafe;
use App\Models\Catering;
use App\Models\Site;

class HomeController extends Controller
{
    public $banner;
    public $testimonial;
    public $cafe;
    public $catering;

    public function __construct() {
        $this->banner = new Banner();
        $this->testimonial = new Testimonial();
        $this->cafe = new Cafe();
        $this->catering = new Catering();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banner = $this->banner->homeBanner();
        $cafeBanner = $this->banner->homeCafe();
        $cateringBanner = $this->banner->homeCatering();
        $gallery = $this->banner->gallery();
        $testimonials = $this->testimonial->testimonials();//dd($testimonials);

        return view('index', compact('banner', 'cafeBanner', 'cateringBanner', 'gallery', 'testimonials'));
    }

    public function cafe(){
        $banner = $this->banner->cafeBanner();
        $testimonials = $this->testimonial->testimonials();
        $gallery = $this->banner->gallery();
        $menu = $this->cafe->menu();

        return view('cafe', compact('banner', 'testimonials', 'gallery', 'menu'));
    }

    public function catering(){
        $banner = $this->banner->cateringBanner();
        $testimonials = $this->testimonial->testimonials();
        $gallery = $this->banner->gallery();

        return view('catering', compact('banner', 'testimonials', 'gallery'));
    }

    public function menu(Request $request){
        Session::forget('catering');

        foreach($request->all() as $d){
            if($d != $request->_token){
                if(is_array($d)){
                    foreach($d as $a){
                        Session::push('catering', $a);
                    }
                } else {
                    Session::push('catering', $d);
                }
            }
        }

        return response()->json('success');
    }

    public function review(){
        $data = Session::get('catering');
        if($data && isset($data[0]['menu'])){
            return view('review', compact('data'));
        }
        $data = $this->catering->getReviewMenu();

        if (empty($data)) {
            return redirect()->to( '/catering/breakfast');
        }

        $currentPage = 'review';
        return view('review', compact('data', 'currentPage'));
    }

    public function details(){
        if(Session::has('catering')){
            $currentPage = 'details';
            return view('details', compact('currentPage'));
        }

        return redirect()->back();
    }

    public function detailsDelivery(){
        if(Session::has('catering')){
            return view('details-delivery');
        }

        return redirect()->back();
    }

    public function breakfast(){
        Session::forget('catering');
        $parent = [
            1   =>  'finger-food',
            2   =>  'buffet',
            3   =>  'setup',
            4   =>  'beverage',
            5   =>  'additional-options'
        ];
        $data = $this->catering->menu('breakfast', $parent);
        $currentPage = 'catering';

        return view('breakfast', compact('data', 'currentPage'));
    }

    public function tea(){
        Session::forget('catering');
        $parent = [
            1   =>  'main-options',
            2   =>  'beverage',
            3   =>  'savoury',
            4   =>  'sweet',
        ];
        $data = $this->catering->menu('tea', $parent);
        $currentPage = 'catering';

        return view('tea', compact('data', 'currentPage'));
    }

    public function lunch(){
        Session::forget('catering');
        $parent = [
            1   =>  'main-options',
            2   =>  'salad',
            3   =>  'sandwich',
            4   =>  'savoury',
            5   =>  'sweet',
        ];
        $data = $this->catering->menu('lunch', $parent);
        $currentPage = 'catering';

        return view('lunch', compact('data', 'currentPage'));
    }

    public function dinner(){
        Session::forget('catering');
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
        $currentPage = 'catering';

        return view('dinner', compact('data', 'currentPage'));
    }

    public function more(Request $request)
    {
        $segment = $request->segment(3);
        Session::forget('catering');
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
        $currentPage = 'catering';

        return view('more-item', compact('data', 'currentPage', 'segment'));
    }

    /*
        $type
        Pickup = 1
        Delivery = 0
    */
    public function detailsPost(Request $request){
        $date_time_parts = explode(' ', $request->date);
        $data = [
            'order' =>  Session::get('catering'),
            'customer' => [
                'name'      =>  $request->name,
                'email'     =>  $request->email,
                'contact'   =>  $request->contact,
                'street'    =>  $request->street,
                'apartment' =>  $request->apartment,
                'code'      =>  $request->code,
                'city'      =>  $request->city,
                'type'      =>  ($request->type) ? 1 : 0,
                'date'      =>  $date_time_parts[0],
                'time'      =>  $date_time_parts[1]
            ]
        ];

        $date_parts = explode('/', $date_time_parts[0]);

        $formatted_datetime = $date_parts[2] . '-' . $date_parts[1] . '-' . $date_parts[0] . ' ' . $date_time_parts[1] . ':00';

        try {
            $order = new Order();
            $order->name = $data['customer']['name'];
            $order->email = $data['customer']['email'];
            $order->contact = $data['customer']['contact'];
            $order->date_time = $formatted_datetime;
            $order->order_type = $data['customer']['type'] == 1 ? 'pick up' : 'delivery';
            $order->apartment = $order->order_type == 0 ? $data['customer']['apartment'] : null;
            $order->street = $order->order_type == 0 ? $data['customer']['street'] : null;
            $order->city = $order->order_type == 0 ? $data['customer']['city'] : null;
            $order->postal_code = $order->order_type == 0 ? $data['customer']['code'] : null;
            $order->status = 'pending';
            $order->save();

            $order_value = 0;
            foreach ($data['order'] as $singleOrder) {
                $orderDetails = new OrderDetails();
                $orderDetails->catering_id = $singleOrder['menu']['id'];
                $orderDetails->name = $singleOrder['menu']['name'];
                $orderDetails->content = $singleOrder['menu']['content'];
                $orderDetails->price = $singleOrder['menu']['price'];
                $orderDetails->grandparent = $singleOrder['menu']['grandparent'];
                $orderDetails->parent = $singleOrder['menu']['parent'];
                $orderDetails->vegetarian = $singleOrder['menu']['vegetarian'];
                $orderDetails->gluten = $singleOrder['menu']['gluten'];
                $orderDetails->vegan = $singleOrder['menu']['vegan'];
                $orderDetails->quantity = $singleOrder['quantity'];
                $order->details()->save($orderDetails);

                $order_value += $singleOrder['menu']['price'];
            }

            $order->order_value = $order_value;
            $order->save();

            $admin = Site::first();
            Mail::to($admin->email)->send(new OrderEmail($data));

            return response()->json('success');
        } catch (\Exception $e) {
            dump($e->getMessage());
            dump($e->getTraceAsString());
            return response()->json('error', 422);
        }
    }

    public function success(){
        $data = Session::get('catering');
        Session::forget('catering');
        $currentPage = 'success';
        return view('success', compact('data', 'currentPage'));
    }

    public function contact(Request $request){
        $data = [
            'name'      =>  $request->name,
            'email'     =>  $request->mail,
            'contact'   =>  $request->number,
            'comment'   =>  $request->comment,
        ];

        $admin = Site::first();
        Mail::to($admin->email)->send(new ContactMail($data));

        return response()->json('success');
    }



    public function deleteMenu(Request $request){
        $data = Session::get('catering');
        Session::forget('catering');
        foreach($data as $d){
            if($d['menu']->id != (int)$request->id){
                Session::push('catering', $d['menu']->id);
            }
        }
        return response()->json('success');
    }

    public function editMenu(Request $request){
        $menu = Session::get('catering');
        Session::forget('catering');

        $quantities = [];
        foreach ($request->input('id') as $index => $item) {
            $quantities[$item] = $request->input('quantity')[$index];
        }

        foreach ($menu as $key => $item) {
            if ($item['menu']->group) {
                $menu[$key]['quantity'] = $quantities[$item['menu']->id];
            }
        }

        Session::put('catering', $menu);

        return response()->json('success');
    }
}
