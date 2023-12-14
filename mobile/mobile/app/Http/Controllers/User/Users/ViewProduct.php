<?php

namespace App\Http\Controllers\User\Users;

use App\Http\Controllers\Controller;
use App\Models\LoadProduct;
use Illuminate\Http\Request;

class ViewProduct extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index(){
        $loadsp = LoadProduct::all();
        return view('user.product', compact('loadsp'))->with('i',(request()->input('page',1)-1)*20);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}