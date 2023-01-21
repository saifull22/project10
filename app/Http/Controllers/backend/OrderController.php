<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    public function createlist()
    {
        $Order = Order::paginate(3);
return view('backend.page.order.Orderlist',compact("Order"));

    }

    public function createfrom()
    {

        return view('backend.page.order.orderFrom');
    }

    
    public function submetfrom(Request $request)//create finish submet from
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
     
    public function editorder($id)//cerate finish edit 
    {

    $order=Order::find($id);

    return view('backend.page.order.orderedit',compact('order'));
    
    }

public function view($id)//create finish view
{


$Order=Order::find($id);

return view('backend.page.order.orderview',compact('Order'));


}

public function updateorder(Request $request,$id)
{

$order=Order::find($id)->update([

'order_status'=>$request->order_status,
'order_date'=>$request->order_date ,
'status'=>$request->status,

]);
return redirect()->route('dd.order.list');

}



}
