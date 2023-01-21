<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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


public function store(Request $request)


{
    
$credentials = $request->except(['_token','remember']);

if(auth()->attempt($credentials)){

return to_route('admin.master');
}
else{
    return to_route('login.from');
}

}




public function submit(Request $request)
{

User::create([



'name'=>$request->name,
'email'=>$request->email,
'password' => bcrypt($request->password),


]);

return to_route('login.from');

}

public function logout()

{
auth()->logout();
return to_route('login.from');

}





}
