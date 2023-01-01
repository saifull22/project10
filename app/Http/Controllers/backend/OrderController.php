<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    public function createlist()
    {
        $Order = Order::all();
return view('backend.page.order.Orderlist',compact("Order"));

    }

    public function createfrom()
    {

        return view('backend.page.order.orderFrom');
    }

    
    public function submetfrom(Request $request)
    {
      Order::create([
    
        'order_status'=>$request->order_status,
    
        'order_date'=>$request->order_date,

        'status'=>$request->status,

      ]);
       return redirect()->route('dd.order.list');
    }
 

    public function delete($id)
    {

Order::find($id)->delete();
return back();


    }
     
    public function editorder($id)
    {

    $Order=Order::find($id);

    return view('backend.page.order.orderEdit',compact('order'));
    
    }


}
