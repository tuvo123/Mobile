<?php

namespace App\Http\Controllers\User\Users;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('user.main');
    }

    public function create()
    {
      return view('user.main');
    }

    // Thêm tài khoản
    public function store(Request $request)
    {
         // Validate dữ liệu được gửi đến từ form đăng ký
         $validatedData = $request->validate([
            'fullname' => 'required',
            'username' => 'required', // Đây chỉ là ví dụ, bạn cần thêm các trường và quy tắc kiểm tra phù hợp
            'email' => 'required',
            'password' => 'required',
            'sdt' => 'required',
            'diachi' => 'required',
            
            //Thêm các trường khác cần validate
        ]);

        $account = Account::create($request->all($validatedData));
        return redirect()->route('user.main')->with('messenger', 'Đăng ký thành công');
    }

    public function show(string $id)
    {
     
    }

    public function edit(string $id)
    {

    }

    public function update(Request $request, string $id)
    {
       
    }

    public function destroy(string $id)
    {
        
    }
}
