<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'taikhoan';

    protected $fillabel = [
        'matk',
        'hoten',
        'email',
        'sdt',
        'matkhau',
        'diachi',
        'quyen',
        'image',
    ];
}
