<?php

namespace App\Http\Controllers\backend;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Detail;
class OrderdetailsController extends Controller
{

public function orderdetails()
{

$order=Detail::paginate(3);
return view('backend.page.orderdetall.orderdetaillist',compact("order"));
}
public function createFrom()
{
return view('backend.page.orderdetall.orderdetailsfrom');
}

public function store(Request $request){

    $request->validate([
        'last_price'=>'required',
        'quentity'=>'required',
        'discount'=>'required'
    ]);

Detail::create([

'last_price'=>$request->last_price,
'quentity'=>$request->quentity,
'discount'=>$request->discount,



]);
return redirect()->route('hh.orderdetails.list')->with('success','Created Successfully');
    
}
public function editdetails($id){
$order=Detail::find($id);

return view('backend.page.orderdetall.orderdetailsedit',compact('order'));


}

public function updatedetails(Request $request,$id)
{

$order=Detail::find($id)->update([

'last_price'=>$request->last_price,
'quentity'=>$request->quentity,
'discount'=>$request->discount,

]);
return redirect()->route('hh.orderdetails.list');

}


public function delete($id)
{

Detail::find($id)->delete();
return back()->with('danger','opps deleted');


}
 





}
