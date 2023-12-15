<?php

namespace App\Http\Controllers\User\Users;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB as FacadesDB;


class LoginController extends Controller
{

    public function index()
    {
        return view('user.main');
    }

    public function register(Request $request){
        $data = array();
        $data['hoten'] = $request-> fullname;
        $data['username'] = $request-> useranme;
        $data['email'] = $request-> email;
        $data['sdt'] = $request-> sdt;
        $data['matkhau'] = $request-> password;
        $data['diachi'] = $request-> diachi;
        $data['status'] = '0';

         DB::table('taikhoan')->insert($data);
         Session::put('massege', 'Đăng ký thành công');
         return Redirect::to('trang-chu');
    
    }

    public function login(Request $request){
        $user_email = $request->email;
        $user_password = $request->password;
        // $user_password = md5($request->admin_password);
        
        $result =FacadesDB::table('taikhoan')->where('email', $user_email)->where('matkhau', $user_password)->first();
       
        if($result){
            $data = array();
            $data['status'] = "1";


            DB::table('taikhoan')->where('email', $user_email)->update($data);

            Session::put('username', $result->username);
            Session::put('id', $result->id);
            Session::put('status', $result->status);
       
            Session::put('message', "Đăng nhập thành công");
            return Redirect::to('/trang-chu');
     
        }else{
            Session::put('message', "Email đăng nhập hoặc mật khẩu không chính xác.");
            return Redirect::to('/trang-chu');
        }
    }
}
