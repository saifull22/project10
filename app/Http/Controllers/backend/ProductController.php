<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{


public function productlist()
{

$product=Product::paginate(3);
return view ('backend.page.product.productlist',compact('product'));

}

public function createfrom()
{


return view('backend.page.product.productfrom');



}

public function store(Request $request)
{
    

    Product::create([


'product_name'=>$request->product_name,
'product_price'=>$request->product_price,
'quentity'=>$request->quentity,
'discount'=>$request->discount,
'status'=>$request->status,


    ]);
return redirect()->route('gg.product.list');
}

public function editproduct($id)

{

$product=Product::find($id);


return view('backend.page.product.productedit',compact('product'));



}

public function updateproduct(Request $request,$id)
{
    $product=Product::find($id)->update([

    'product_name'=>$request->product_name,
    'product_price'=>$request->product_price,
    'discount'=>$request->discount,
    'status'=>$request->status,
    
]);
return redirect()->route('gg.product.list');
}

public function delete($id)
{

    Product::find($id)->delete();
    return back();
    
}






}

