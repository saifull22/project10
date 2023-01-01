<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;

class AuthController extends Controller
{
public function Registrationfrom()
{

return view('backend.Auth.Registration');

}
public function login()
{

return view('backend.Auth.Login');


}
public function submit(Request $request)
{

Registration::create([

'username'=>$request->username,
'password'=>$request->password,
'email'=>$request->email,


]);return back();

}




}
