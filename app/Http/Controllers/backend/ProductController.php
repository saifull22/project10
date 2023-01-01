<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function list()
    {

        return view('backend.page.product.list');
        
    }


    public function createFrom()
    {

      return view('backend.page.product.productcreatefrom');
    }


    public function store(Request $request){
        Product::create([
            'product_name' =>$request->product_name,
            'product_price' =>$request->product_price,
            'quentity' =>$request->quentity,
            'discount' =>$request->discount,
            'status' =>$request->status,

        ]);
        return back();

    }

    



}

