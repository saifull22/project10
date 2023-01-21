<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\wish;
class WishController extends Controller
{
public function list()


{

//return view('backend.page.wish_list.wishlist');
$Wishj=wish::paginate(3);
return view('backend.page.wish_list.wishlist', compact('Wishj'));


}
public function createfrom()

{


return view('backend.page.wish_list.wishfrom');



}

public function store(Request $request)
{


$filename=null;
if($request->hasfile('image')){

    
$filename=date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
 $request->file('image')->storeAs('/uploads/',$filename); 


}

Wish::create([


'image'=>$filename,
'category'=>$request->category,
'sub_category'=>$request-> sub_category,
'price'=>$request->price,
'status'=>$request->status,
'size'=>$request->size,


]);
return redirect()->route('ff.wish.list');

}

public function edit($id)
{

$wishj=Wish::find($id);


return view('backend.page.wish_list.wishedit',compact('wishj'));


    
}
public function delete($id)

   
    {

    Wish::find($id)->delete();
    return back();
}
public function updetewish(Request $request,$id)
{

$wishj=Wish::find($id)->update([



'filename'=>$request->filename,
'category'=>$request->category,
'sub_category'=>$request->sub_category,
'price'=>$request->price,
'status'=>$request->status,
'size'=>$request->size,

]);
return redirect()->route('ff.wish.list');


}

}
