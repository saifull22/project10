<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontentController extends Controller
{




    public function homepage()
    {

        return view('frontend.master');
    }
    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('$request->password'),
        ]);
        return redirect()->back();
    }

    public function Frontentlogin(Request $request)


    {

        
        $credentials = $request->except(['_token']);

        if (auth()->attempt($credentials)) {
            if (auth()->user()->role == 'admin') {
                return to_route('admin.master');
            } else {
                return to_route('homepage');
            }
        } else {
            return to_route('homepage');
        }
    }
}
