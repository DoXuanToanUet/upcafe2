<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    use HasFactory;

    protected $table = 'cafe';

    protected $fillable = ['file'];

    public function menu(){
        $data = Cafe::all();
        return $data;
    }
}
