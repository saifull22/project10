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
$category=category::paginate(5);
return view('backend.page.category.categorylist', compact('category'));
}

public function createFrom()
{

return view('backend.page.category.categoryFrom');

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

    return view('backend.page.category.categoryview',compact('category'));
}

public function editcategory($id)
{
$category=category::find($id);

return view('backend.page.category.categoryedit',compact('category'));


}

public function updatecategory(Request $request,$id)
{
    $category=Category::find($id)->update([

    'Firstname'=>$request->Firstname,
    'Lastname'=>$request->Lastname,
   
]);
return redirect()->route('aa.category.list');
}

public function delete($id)
{
Category::find($id)->delete();
return back();


}


}
