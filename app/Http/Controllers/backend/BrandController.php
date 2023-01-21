<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Brand;
class BrandController extends Controller
{
public function createlist()
{
$brand=Brand::paginate(3);//$brand=Brand::all();

return view('backend.page.brand.brandlist',compact('brand'));

}
public function createfrom()
{

return view('backend.page.brand.brandfrom');

}

public function store(Request $request)
{

Brand::create([

'brand_name'=>$request->brand_name,

]);
return redirect()->route('ee.brand.list');

}

public function editbrand($id)
{

$brand=Brand::find($id);

return view('backend.page.brand.brandedit',compact('brand'));

}

public function delete($id)
{

Brand::find($id)->delete();

return back();
    
}

public function updatebrand(Request $request,$id)
{

$brand=Brand::find($id)->update([


'brand_name'=>$request->brand_name,

]);
return redirect()->route('ee.brand.list');



}





}
