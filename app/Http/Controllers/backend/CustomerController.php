<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller

{

public function customerlist(){

//return view('backend.page.customerlist');
$customer=customer::paginate(3);
return view('backend.page.customer.customerlist', compact('customer'));

}
public function createFrom()
{

    return view('backend.page.customer.customerFrom');

}

public function submit(Request $request)
{
   Customer::create([

    'email'=>$request->email,

    'password'=>$request->password,

   ]);
   return redirect()->route('bb.customer.list')->with('message','Created Successfully');

}
    public function view($id)
{

    $customer=customer::find($id);

    return view('backend.page.customer.customerview',compact('customer'));

}
public function editCustomer($id)
{
$customer=customer::find($id);
return view('backend.page.customer.customerEdit',compact('customer'));

}
public function updateCustomer(Request $request,$id)
{


     $customer=customer::find($id)->update([

        'email'=>$request->email,

     'password'=>$request->password,
     ]);
    
     return redirect()->route('bb.customer.list');
}

public function delete($id)
{
Customer::find($id)->delete();
return back();


}

}

