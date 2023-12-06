<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
   

    public function index(){

        $show_product = DB::table('sanpham')->get();
        return view('admin.main', ['main' => $show_product]);
    }


    
}
