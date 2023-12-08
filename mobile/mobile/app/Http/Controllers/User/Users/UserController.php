<?php

namespace App\Http\Controllers\User\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.main');
    }
    public function product_detail(){
        return view('user.product_detail');
    }
    public function product(){
        return view('user.product');
    }
    public function order(){
        return view('user.order');
    }
    public function pay(){
        return view('user.pay');
    }
    public function cart(){
        return view('user.cart');
    }
}
