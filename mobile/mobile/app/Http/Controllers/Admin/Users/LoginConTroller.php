<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class LoginConTroller extends Controller
{
    public function index(){
        return view('admin.users.login');
    }
}
