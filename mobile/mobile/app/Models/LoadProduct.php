<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoadProduct extends Model
{
    use HasFactory;
    protected $table = 'sanpham';

    protected $fillable = [
        'masp',
        'tensp',
        'dungluong1',
        'gia1',
        'dungluong2',
        'gia2',
        'dungluong3',
        'gia3',
        'dungluong4',
        'gia4',
        'mota',
        'baohanh',
        'ram1',
        'ram2',
        'ram3',
        'ram4',
        'image',
    ];
}
