<?php

namespace App\Models;

use Session;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catering extends Model
{
    use HasFactory;

    protected $table = 'catering';

    protected $fillable = ['name', 'content', 'group', 'price', 'grandparent', 'parent', 'vegetarian', 'gluten', 'vegan'];

    public function nestedMenu($menu, $parent){
        $data = [];
        foreach($menu as $m){
            $value = $parent[$m->parent];
            if(isset($data[$value])){
                array_push($data[$value], $m);
            } else {
                $data[$value][] = $m;
            }
        }
        return $data;
    }

    public function menu($grandparent, $parent){
        $menu = Catering::where('grandparent', $grandparent)->get();
        $data = $this->nestedMenu($menu, $parent);
        return $data;
    }

    public function getReviewMenu(){
        $menu = Session::get('catering');
        Session::forget('catering');
        $data = [];
        if($menu){
            foreach($menu as $d){
                $menuData = Catering::where('id', $d)->first();
                if($menuData){
                    $data = [
                        'menu'  =>  $menuData,
                        'quantity'  =>  (isset($d['quantity'])) ? $d['quantity'] : $menuData->group
                    ];
                    Session::push('catering', $data);
                }
            }
        }
        return Session::get('catering');
    }
    
    public function getFormattedPriceAttribute() {
        if ($this->price > 0) {
            return '$ ' . number_format($this->price, 2);
        } elseif ($this->price == 0) {
            return null;
        } else {
            return 'Price on Request';
        }
    }
}
