<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControler extends Controller
{
    public function hienThiSanPham($aaa){
        return view('product',['key1'=>$aaa]);
    }
}
