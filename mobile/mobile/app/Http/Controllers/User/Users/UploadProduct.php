<?php

namespace App\Http\Controllers\User\Users;

use App\Http\Controllers\Controller;
use App\Models\LoadProduct;
use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
class UploadProduct extends Controller
{

    public function index()
    {
         $loadPro = LoadProduct::where('type', 1)->paginate(10);
         $loadSaleProductIP = LoadProduct::where('type', 0)->orderBy('id', 'asc')->paginate(5);
         $loadSaleProductDesc = LoadProduct::where('type', 0)->orderBy('id', 'desc')->paginate(5);
         $loadSaleProduct = LoadProduct::where('type', 0)->paginate(5);
         $loadProductEnd = LoadProduct::paginate(4);

         return view('user.main', compact('loadPro', 'loadSaleProductIP', 'loadSaleProductDesc', 'loadSaleProduct','loadProductEnd'))
         ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
      return view('user.main');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required',
            'username' => 'required', // Đây chỉ là ví dụ, bạn cần thêm các trường và quy tắc kiểm tra phù hợp
            'email' => 'required',
            'password' => 'required',
            'sdt' => 'required',
            'diachi' => 'required',
            
            //Thêm các trường khác cần validate
        ]);

        Account::create($request->all($validatedData));
    
        return redirect()->route('user.test')->with('messenger', 'Đăng ký thành công');
     
    
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
  
}
