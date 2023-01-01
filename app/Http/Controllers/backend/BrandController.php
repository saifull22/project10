<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
public function createlist()
{

return view('backend.page.Brandlist');

}
public function createForm()
{

return view('backend.page.BrandFrom');


}
public function submetFrom(Request $Request)

{




}
}
