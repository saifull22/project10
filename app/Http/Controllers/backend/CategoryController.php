<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function list()
    
    {

//return view('backend.page.category');
$category=category::all();
return view('backend.page.categorylist', compact('category'));
}

public function createFrom()
{

return view('backend.page.createFrom');

}


public function store(Request $request)
{
   Category::create([

    'Firstname'=>$request->Firstname,
    'Lastname'=>$request->Lastname,
   
   ]);
   return redirect()->route('aa.category.list');
}

public function view($id)

{

    $category=category::find($id);

    return view('backend.page.categoryview',compact('category'));
}


}