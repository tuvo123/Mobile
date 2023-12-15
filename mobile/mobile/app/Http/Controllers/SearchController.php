<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LoadProduct;
use Illuminate\Http\Request;
class SearchController extends Controller{
    public function search(Request $request){
        $keyword = $request -> input('edtsearch');
        $sanphamtk = LoadProduct::where('tensp','like','%'.$keyword.'%')->get();
        return view('user.product',compact('sanphamtk'));
    }
}
?>