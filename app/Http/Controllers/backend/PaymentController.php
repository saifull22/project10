<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{

public function paymentlist()

{

//return view('backend.page.payment.paymentlist');
$payment=payment::paginate(3);
return view('backend.page.payment.paymentlist', compact('payment'));


}

public function createfrom()
{

return view('backend.page.payment.paymentfrom');

}

public function submit(Request $request)

{
    //dd($request->all());
     Payment::create([

       'amount'=>$request->amount,
    
       ]);
       return redirect()->route('cc.payment.list');
       
}
public function delete($id)
{
Payment::find($id)->delete();
return back();

}

public function editpayment($id)
{
    $payment=payment::find($id);
    return view('backend.page.payment.paymentedit',compact('payment'));
    


}
public function updatepayment(Request $request,$id)
{



    $payment=Payment::find($id)->update([

        'amount'=>$request->amount,



    ]);
return redirect()->route('cc.payment.list');




}


}
