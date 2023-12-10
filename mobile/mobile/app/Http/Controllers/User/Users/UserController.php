<?php

namespace App\Http\Controllers\User\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function Login(Request $request){
        
        $this->validate($request, [
            // Bắt lỗi nếu không nhập email, password
            'email'=> 'required|email:filter',
            'password'=> 'required'
        ]);

        if(Auth::attempt(['email' => $request->input('email'),
        'password' => $request->input('matkhau'),
        ])){

            return route('login');
        }
        return redirect()->back();
    }
}
